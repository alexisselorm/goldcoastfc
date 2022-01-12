@extends('layout.master')
@section('content')

<form action="/admin/news" method="post">
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Title
        </label>
    <input type="text" class="border border-gray-400 p-2 w-full" name="title" id="title" required>
    @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
    
</div>
</form>





@endsection