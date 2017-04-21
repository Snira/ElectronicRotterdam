@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$event->name}}</h1>
        <p>{{$event->description}}</p>
        <h3>{{date('d-m-Y', strtotime($event->date))}}</h3>
        <h2 class="h2">Locatie</h2>
        <h4>{{$event->location}}, {{$event->city}}</h4>
        <iframe id="360" width="560" height="315" src="https://www.youtube.com/embed/j81DDY4nvos" frameborder="0" allowfullscreen></iframe>
        <h2>Tickets te koop op <a href="{{$event->ticket_url}}">ticketscript</a></h2>
        <p>Voor dit evenement zijn er alleen kaarten te verkrijgen via ticketscript. Voor dit evenement kunt u <a href="{{$event->ticket_url}}">hier</a> terecht</p>


    </div>






@endsection
