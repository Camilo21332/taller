<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function province()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');

       return $this->belongsTo('App\Models\Province');
    }
    use HasFactory;
}
