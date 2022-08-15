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
        $timelineEvents = $repo->generateFamilyTimeline($family)->all();

        return view('dashboard')
        ->with('family', $family)
        ->with('timelineEvents', $timelineEvents);
    }
}
