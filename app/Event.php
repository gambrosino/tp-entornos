<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'owner'];

    public function owner()
    {
    	return $this->belongsTo(User::class, 'owner', 'id');
    }

    public function attendants()
    {
    	return $this->belongsToMany(Attendant::class);
    }
}
