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
}
