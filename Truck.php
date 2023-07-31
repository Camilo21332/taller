<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    public function truckdrives()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');

       return $this->belongsToMany('App\Models\Truckdrive');
    }
    
}
