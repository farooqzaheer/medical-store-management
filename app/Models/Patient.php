<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function sells()
    {
        return $this->hasMany(Sell::class);
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
