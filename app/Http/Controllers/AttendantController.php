<?php

namespace App\Http\Controllers;

use App\Attendant;
use App\Event;
use Illuminate\Http\Request;

class AttendantController extends Controller
{
    public function store(Request $request)
    {
    	$data = $request->validate([
    		'name' => 'required|string|max:50',
    		'dni' => 'required|string|unique:attendants|max:10',
    		'email' => 'required|email|unique:attendants'
		]);

		$attendant = Attendant::create($data);

		$event = Event::findOrFail($request->input('event'));

		if ($event->hasRoom()) {
			$attendant->registerTo($event);
		} else {
			//display message
		}

		return redirect()->back();
    }
}
