@extends('layout.master')

@section('content')
    <article>
        <h2>{{ $player->fname }}</h2>
        <h1>{{ $player->lname }}</h1>

        <div>
            <img src="{{ $player->picture }}" alt="Image?">
        </div>
    </article>

    <a href="/">Go home</a>
    <a href="/players"> To players</a>
@endsection
