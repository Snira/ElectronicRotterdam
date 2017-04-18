<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function show(){
        $events = Event::where('city','Rotterdam');

        return view('events')->with('events', $events);
    }
}
