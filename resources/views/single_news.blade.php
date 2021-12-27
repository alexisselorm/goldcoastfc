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
       {{-- Post a comment, if only you're logged in --}}
@auth
    

       <section class="col-span-8 col-start-5 mt-10 space-y-6">
           <form action="/news/{{$single_news->slug}}/comments" method="POST" class="border border-gray-200 p-6 rounded-xl">
               @csrf
               <header class="flex items-center">
               <img src="https://i.pravatar.cc/150?u={{auth()->id()}}" alt="" width="40" height="60" class="rounded-full mr-1">
               <h2>Your thoughts?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="10" placeholder="Your thoughts!" required></textarea>
            </div>
            @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Comment</button>
            </div>
           </form>
       </section>
       @else
       <p class="font-semibold">
           <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline"> Login to comment</a>
       </p>
       @endauth

        {{-- Comments section --}}
        @include('components.comments')
    </article>

    <a href="/">Go home</a>

    <a href="/news"> To News</a>
@endsection
