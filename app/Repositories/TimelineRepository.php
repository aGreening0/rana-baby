<?php

namespace App\Repositories;
use Baby;
use Family;
use Carbon\Carbon;

class TimelineRepository
{

    public function generateBabyTimeline($baby)
    {
        $timelineEvents = collect();
        $today = now();
        $milks = $baby->milks()->whereDate('created_at', $today)->get();
        $diapers = $baby->diapers()->whereDate('created_at', $today)->get();

        if($milks->isNotEmpty())
        {
            foreach ($milks as $milk)
            {
                $time = Carbon::parse($milk->created_at)->format('h:i a');
                $timelineEvent = [
                    'type' => 'milk',
                    'time' => $milk->created_at,
                    'text' => $milk->baby->name . ' ate ' . $milk->amount . 'mL at ' . $time . ' by ' . $milk->user->name,
                ];

                $timelineEvents->push($timelineEvent);
            }
        }

        if($diapers->isNotEmpty())
        {
            foreach ($diapers as $diaper)
            {
                $time = Carbon::parse($diaper->created_at)->format('h:i a');
                $timelineEvent = [
                    'type' => 'diaper',
                    'time' => $diaper->created_at,
                    'text' => $diaper->baby->name . ' had a diaper change at ' . $time . ' by ' . $diaper->user->name,
                ];

                $timelineEvents->push($timelineEvent);
            }
        }


        $timelineEventsSorted = $timelineEvents->sortByDesc('time')->all();

        return $timelineEventsSorted;

    }


    public function generateFamilyTimeline($family)
    {
        $babies = $family->babies;

        $timelineEvents = collect();

        if(!$babies) return;

        foreach($babies as $baby)
        {
            $babyEvents = $this->generateBabyTimeline($baby);
            foreach($babyEvents as $event)
            {
                $timelineEvents->push($event);
            }


        }

        $timelineEventsSorted = $timelineEvents->sortByDesc('time');


        return $timelineEventsSorted;
    }

}

