@extends('layout.master')

@section('content')
    <article>
        <h2>{{ $player->fname }}</h2>
        <h1>{{ $player->lname }}</h1>

        <div>
            {{ $player->position->name }}
        </div>
    </article>

    <a href="/">Go home</a>
    <a href="/players"> To players</a>
@endsection
