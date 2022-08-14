<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Repositories\TimelineRepository as TimelineRepository;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $family = $user->family;
        $repo = new TimelineRepository;
        $timelineEvents = $repo->generateBabyTimeline($family->babies->first())->all();
        // each baby with milks, diapers, sleep where timestamp is less than 24 hours
        // last milk, diaper, sleep
        // timeline with all entries for last 24 hours

        return view('dashboard')
        ->with('family', $family)
        ->with('timelineEvents', $timelineEvents);
    }
}
