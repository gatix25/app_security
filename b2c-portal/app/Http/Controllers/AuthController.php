<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        \Log::info('Login attempt', ['email' => $request->email]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            \Log::error('Validation failed', ['errors' => $validator->errors()]);
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            \Log::error('User not found', ['email' => $request->email]);
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        \Log::info('User found', ['user_id' => $user->id, 'email' => $user->email]);

        if (Hash::check($request->password, $user->password)) {
            \Log::info('Password matches', ['user_id' => $user->id]);

            Auth::login($user);

            // Zaznamenání přihlášení do tabulky logins včetně IP adresy
            \App\Models\Login::create([
                'email' => $user->email,
                'type' => 'login',
                'ip' => $request->ip(), // Uložení IP adresy
                'created_at' => now(),
                'updated_at' => now()
            ]);

            \Log::info('User logged in successfully', ['user_id' => $user->id]);

            return response()->json(['message' => 'Login successful'], 200);
        } else {
            \Log::error('Password does not match', ['user_id' => $user->id]);
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    
    public function register(Request $request)
    {
        \Log::info('Register method called');
    
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);
    
        if ($validator->fails()) {
            \Log::error('Validation failed', ['errors' => $validator->errors()]);
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
    
        try {
            \Log::info('Validation passed');
    
            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'ip' => $request->ip(),  // Uložení IP adresy
            ]);
    
            \Log::info('User created successfully', ['user' => $user]);
    
            auth()->login($user);
    
            \Log::info('User logged in');
    
            return redirect('/login')->with('success', 'Registrace byla úspěšná. Můžete se přihlásit.');
        } catch (\Exception $e) {
            \Log::error('Registration failed', ['exception' => $e]);
            return response()->json(['error' => 'Registration failed'], 500);
        }
    }
    
    public function logout()
    {
        \Log::info('Logout attempt', ['user_id' => Auth::id()]);

        // Zaznamenání odhlášení do tabulky logins
        \App\Models\Login::create([
            'email' => Auth::user()->email,
            'type' => 'logout',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Auth::logout();

        \Log::info('User logged out successfully', ['user_id' => Auth::id()]);

        return redirect('/login')->with('success', 'Odhlášení proběhlo úspěšně.');
    }
}
