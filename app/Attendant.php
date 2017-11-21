<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $fillable = ['name', 'dni','email'];

    public function registerTo(Event $event)
    {
        $this->load('events');
        if (!$this->events->contains($event)) {
            $this->events()->attach($event->id, ['code' => str_random(6)]);
        }
    }

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