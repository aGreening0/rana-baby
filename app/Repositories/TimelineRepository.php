<?php

namespace App\Repositories;
use Baby;
use Carbon\Carbon;

class TimelineRepository
{

    public function generateBabyTimeline(Baby $baby)
    {
        $timelineEvents = collect();
        $today = now()->format('Y-m-d');
        $milks = $baby->milks()->whereDate('created_at', [$today])->get();

        if (!$milks) return;

        foreach ($milks as $milk)
        {
            $time = Carbon::parse($milk->created_at)->format('h:mm a');
            $timelineEvent = [
                'type' => 'milk',
                'time' => $milk->created_at,
                'text' => $milk->baby->name . ' ate ' . $milk->amount . 'mL at ' . $time . ' by ' . $milk->user->name,
            ];

            $timelineEvents->push($timelineEvent);
        }

        return $timelineEvents;

    }
}
