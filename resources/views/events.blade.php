@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="h1">Aankomende Evenementen</h1>

        <div id="eventlist" class="list-group">
            @foreach($events as $event)
                <div class="list-group-item">
                    <h2><a href="{{ route('event.select', compact('event')) }}" class="h2">{{$event->name}}</a></h2>
                    <p>{{$event->description}}</p>
                    <p>{{$event->date}}, {{$event->location}}, {{$event->city}}</p>
                    <h3 style="margin-left: 1000px; color: darkred;" class="h3">{{$event->genre}}</h3>
                </div>


            @endforeach


        </div>
    </div>





@endsection
