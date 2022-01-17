@extends('layout.master')

@section('content')
<div class="flex-1">

    <form action="/admin/news/{{$single_news->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Title
            </label>
        <input type="text" class="border border-gray-400 p-2 w-full" name="title" id="title" :value="{{old('title',$single_news->title)}}" required>
        @error('title')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
        </div>
    
        <div class="mb-6">
            <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Slug
            </label>
        <input type="text" class="border border-gray-400 p-2 w-full" name="slug" id="slug" :value="{{old('slug',$single_news->slug)}}">
        @error('slug')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
    </div>
    
    
        <div class="mb-6">
            <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Excerpt
            </label>
            <textarea name="excerpt" id="excerpt" cols="10" rows="3" class="border border-gray-400 p-2 w-full" :value="{{old('excerpt',$single_news->excerpt)}}"></textarea>
        </div>
    
        <div class="mb-6">
            <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Body
            </label>
            <textarea name="body" id="body" cols="10" rows="5" class="border border-gray-400 p-2 w-full" :value="{{old('body',$single_news->body)}}"></textarea>
        </div>
        <div class="mb-6">
            <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Thumbnail
            </label>
        <input type="file" class="border border-gray-400 p-2 w-full" name="thumbnail" id="thumbnail" :value="{{old('thumbnail',$single_news->thumbnail)}}">
        @error('thumbnail')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
    </div>
        <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
            Update
        </button>
    
    
    </form>
    </div>
    
@endsection