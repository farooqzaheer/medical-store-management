<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category(){
        return $this->belongsTo(category::class); 
    }

    public function purchases()
    {
        return $this->hasMany(Purchas::class); 
    }
}
