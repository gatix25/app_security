<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        $logins = Auth::user()->logins()
                        ->where('created_at', '>', now()->subWeek())
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('activity', compact('logins'));
    }
}
