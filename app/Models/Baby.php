<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Baby extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function milks()
    {
        return $this->hasMany(Milk::class);
    }

    public function diapers()
    {
        return $this->hasMany(Diaper::class);
    }

    public function getAge()
    {
        $age = Carbon::parse($this->dob)->diffInWeeks(Carbon::now());

        return $age;
    }

    public function milkType()
    {
        $types = [
            '1' => 'Exclusively Breastfed',
            '2' => 'Exclusively Formula Fed',
            '3' => 'Combination Fed',
        ];

        $milkType = $types[$this->milk];

        return $milkType;
    }

    public function todaysMilk()
    {
        $todaysMilk = $this->milks()->whereDate('created_at', now())->get();

        return $todaysMilk;
    }

    public function todaysDiapers()
    {
        $todaysDiapers = $this->diapers()->whereDate('created_at', now())->get();

        return $todaysDiapers;
    }

    public function lastMilk()
    {
        $lastMilk = $this->milks->last()->created_at->diffForHumans();

        return $lastMilk;
    }

    public function lastDiaper()
    {
        $lastDiaper = $this->diapers->last()->created_at->diffForHumans();

        return $lastDiaper;
    }
}
