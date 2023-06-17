<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchas extends Model
{
    use HasFactory;
   

    public function drug()
    {
        return $this->belongsTo(drug::class); 
    }

    public function sells()
    {
        return $this->hasMany(Sell::class);
    }

}
