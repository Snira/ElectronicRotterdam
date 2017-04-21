@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="h1 text-center">Find your event!</h1>
        <div class="search">
            <form action="{{route('events')}}"><label for="search"></label>
                <input autocomplete="off" id="search" class="center-block left" type="search" placeholder="Search your city">
                <button type="submit" style="position: absolute; left: -9999px;">GO</button>
            </form>
        </div>



    </div>
@endsection
