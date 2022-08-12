<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $family = $user->family;

        return view('dashboard')
        ->with('family', $family);
    }
}
