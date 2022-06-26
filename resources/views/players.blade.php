@extends('layout.master')
@section('content')
    <div class="container">
        @foreach ($positions as $position)
            <div class="box {{ $position->slug }}">
                {{-- {{dd($positions)}} --}}
                {{-- <h1><a href="/positions/{{$position->slug}}">{{$position->name}}</a></h1> --}}
                <h1 style="font-weight: bold">{{ $position->name }}</h1>
                <hr style="width:80%" />



                @foreach ($position->players as $player)
                    <p style="font-size:40px">
                        {{-- <a href="/players/{{ $player->slug }}">{{ $player->fname }} {{ $player->lname }}</a> --}}
                        {{ $player->fname }} {{ $player->lname }}

                    </p>
                @endforeach
                <br /><br />
            </div>
        @endforeach
    </div>
@endsection
