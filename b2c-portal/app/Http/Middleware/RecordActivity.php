<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;  // Předpokládá, že máte model Login pro tabulku 'logins'

class RecordActivity
{
    public function handle($request, Closure $next, $type)
    {
        $response = $next($request);

        if (Auth::check()) {
            Login::create([
                'email' => Auth::user()->email,
                'password' => Auth::user()->password, // Pozor, toto není bezpečné ukládat hesla v nehashované formě!
                'type' => $type,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return $response;
    }
}
