<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function package()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');

       return $this->belongsTo('App\Models\package');
    }
    use HasFactory;
}
