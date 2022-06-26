@extends('layout.master')

@section('content')
    <div class="container">
        @foreach ($news as $single_news)
            <div class="box news_item bg-dark mb-1">
                <article>
                    <h1><a href="/news/{{ $single_news->slug }}">
                            {{ $single_news->title }}
                        </a>
                    </h1>


                    <p>
                        {!! $single_news->excerpt !!}</a>

                    </p>
                    <p>
                        Written by <a
                            href="/authors/{{ $single_news->author->username }}">{{ $single_news->author->name }}</a>
                    </p>
                    <p class="mt-4 block text-gray-400 text-xs"> Published
                        <time>{{ $single_news->created_at->diffForHumans() }}</time>
                    </p>
                </article>
            </div>
        @endforeach
    </div>
    <div>
        {{ $news->links() }}
    </div>
@endsection
