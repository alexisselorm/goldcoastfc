@extends('layout.master')

@section('content')
<div class="container">
    <h1 class="text-center font-bold text-xl">Log In</h1>
    <form action="/sessions" method="POST" class="mt-10">
        @csrf 
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
    <input type="email" class="border border-gray-400 p-2 w-full" id="email" name="email" 
    value="{{old('email')}}"" 
    autocomplete="username">
    @error('email')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        
    @enderror
</div>
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
    <input type="password" class="border border-gray-400 p-2 w-full" id="password" name="password">
    @error('password')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        
    @enderror
</div>
<div class="mb-6">
    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
        Log In
    </button>
</div>
</form>
</div>