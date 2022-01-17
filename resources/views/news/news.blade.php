@extends('layout.master')

@section('content')
@foreach ($news as $single_news)
    <article>
        <h1><a href="/news/{{$single_news->slug}}">
            {{$single_news->title}}
        </a>
        </h1>
        <div>
            <p>
              {!!$single_news->excerpt!!}</a>
            
            </p>
            <p>
                Written by <a href="/authors/{{$single_news->author->username}}">{{$single_news->author->name}}</a>
            </p>
            <p class="mt-4 block text-gray-400 text-xs"> Published <time>{{$single_news->created_at->diffForHumans()}}</time> </p> 
        </div>
    </article>
    @endforeach
    <div>
    {{$news->links()}}
</div>
  @endsection 