@extends('layout.master')
@section('content')



<div class="max-w-sm mx-auto">
    <p class="py-2 block mb-2 uppercase font-bold text-m text-gray-700">A New Post</p>
    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/news" class="{{request()->is('admin/news') ? 'text-blue-500' : ''}}">My News</a>
                </li>
                <li>
                    <a href="/admin/news/create" class="{{request()->is('admin/news/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>

            </ul>
        </aside>

    </div>
    {{-- Flex --}}
    <div class="flex-1">
<form action="/admin/news" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Title
        </label>
    <input type="text" class="border border-gray-400 p-2 w-full" name="title" id="title" value="{{old('title')}}" required>
    @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Slug
        </label>
    <input type="text" class="border border-gray-400 p-2 w-full" name="slug" id="slug" value="{{old('slug')}}">
    @error('slug')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>


    <div class="mb-6">
        <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Excerpt
        </label>
        <textarea name="excerpt" id="excerpt" cols="10" rows="3" class="border border-gray-400 p-2 w-full" value="{{old('excerpt')}}"></textarea>
    </div>

    <div class="mb-6">
        <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Body
        </label>
        <textarea name="body" id="body" cols="10" rows="5" class="border border-gray-400 p-2 w-full" value="{{old('body')}}"></textarea>
    </div>
    <div class="mb-6">
        <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Thumbnail
        </label>
    <input type="file" class="border border-gray-400 p-2 w-full" name="thumbnail" id="thumbnail" value="{{old('slug')}}">
    @error('thumbnail')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
    <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
        Publish
    </button>


</form>
</div>
</div>





@endsection