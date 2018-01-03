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

    public function create()
    {
    	return view('events.create');
    }

    public function store(Request $request)
    {
       $event = $request->validate([
            'name' => 'required|string|max:50',
            'place' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'date_time' => 'required|date',
            'description' => 'required|string'
       ]);

       $event['owner'] = auth()->user()->id;

       Event::create($event);

       return redirect('home');
    }
}
