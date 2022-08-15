<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diaper extends Model
{
    use HasFactory;

    public function baby()
    {
        return $this->belongsTo(Baby::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
