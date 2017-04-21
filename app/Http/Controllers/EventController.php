<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('events')->with('events', $events);
    }


    public function show($event)
    {
        $event = Event::find($event);

        return view('select')->with('event', $event);
    }
}
