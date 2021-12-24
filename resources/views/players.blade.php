@extends('layout.master')

@section('content')
@foreach ($players as $player)
    <article>
        <h1><a href="/players/<?= $player->slug;?>">
            {{$player->fname}} {{$player->lname}}
        </a>
        </h1>
        <div>
            <p>
                <a href="/positions/{{$player->position->slug}}">{!!$player->position->name!!}</a>
            </p>
        </div>
    </article>
    @endforeach
  @endsection 
