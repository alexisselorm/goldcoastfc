@extends('layout.master')

@section('content')
    <article>
       <h1>{!!$single_news->title!!}</h1>

       <p>
           Written by <a href="/authors/{{$single_news->author->username }}">{{$single_news->author->name}}</a>
       </p>
        <div>
            {{ $single_news->body }}
        </div>
        <p class="mt-4 block text-gray-400 text-xs"> Published <time>{{$single_news->created_at->diffForHumans()}}</time> </p>
       
        {{-- Comments section --}}
        @include('components.comments')
        @include('components.comments')
        @include('components.comments')
    </article>

    <a href="/">Go home</a>

    <a href="/news"> To News</a>
@endsection
