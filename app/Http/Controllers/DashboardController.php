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

        // each baby with milks, diapers, sleep where timestamp is less than 24 hours
        // last milk, diaper, sleep
        // timeline with all entries for last 24 hours




        return view('dashboard')
        ->with('family', $family);
    }
}
