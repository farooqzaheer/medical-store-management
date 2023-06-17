<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    public function purchas()
    {
        return $this->belongsTo(Purchas::class);
    }

    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
