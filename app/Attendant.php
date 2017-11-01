<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $fillable = ['name', 'email'];

    public function events()
    {
    	return $this->belongsToMany(Event::class)
    		->withPivot('code')
    		->withTimestamps();
    }

    public function likes()
    {
    	return $this->hasMany(Like::class);
    }
}