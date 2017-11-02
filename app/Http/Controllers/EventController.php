<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
    	$events = Event::all();

    	return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
    	return view('events.show', compact('event'));
    }
}
