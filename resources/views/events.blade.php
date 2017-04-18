@extends('layouts.app')

@section('content')
   <ul>
@foreach($events as $event)
<li>{{$event}}</li>
@endforeach


   </ul>
@endsection
