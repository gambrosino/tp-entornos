<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'owner',
        'description',
        'place',
        'address',
        'date_time'];

    public function getDateTimeAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getAttendantsCount()
    {
        return $this->attendants()->count();
    }

    public function getLikesCount()
    {
        return $this->likes()->count();
    }

    public function hasRoom()
    {
        //TODO
        return true;
    }

    public function owner()
    {
    	return $this->belongsTo(User::class, 'owner', 'id');
    }

    public function attendants()
    {
    	return $this->belongsToMany(Attendant::class);
    }

    public function likes()
    {
    	return $this->hasMany(Like::class);
    }
}
