@extends('layout.master')

@section('content')


        @foreach ($positions as $position)
        {{-- {{dd($positions)}} --}}
        {{-- <h1><a href="/positions/{{$position->slug}}">{{$position->name}}</a></h1> --}}
        <h1>{{$position->name}}</h1>
        @foreach($position->players as $player)
      
        <h2>
            <a href="/players/{{$player->slug}}">{{($player->fname)}} {{$player->lname}}
            </a>
        </h2>
        @endforeach
        <br>
        <br>
        @endforeach
        
        

  @endsection 
