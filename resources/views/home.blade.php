@extends('layout.master')

@section('content')

  <!-- Button trigger modal -->
  <!-- Jumbroton -->
  <div class="bg-light p-5 rounded-lg my-1 jumbotron">
    <div id="info" class="m-0">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn inside btn-lg" href="#" role="button">Read more <i class="fas fa-arrow-right"></i></a>
  </div>
  </div>

    <!-- Cards -->

    <div class="card-group m-2 ">
      <div class="card mx-2">
        @foreach ( $news as $single_news)
        {{-- <img src="{{asset('storage/'.$single_news->thumbnail)}}" class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <a href="/news/{{$single_news->slug}}">{{$single_news->title}}</a>
          <p class="card-text">{{$single_news->excerpt}}</p>
          <p>
            Written by <a href="/authors/{{$single_news->author->username}}">{{$single_news->author->name}}</a>
        </p>

        </div>
        <div class="card-footer">
          <small class="text-muted"> Published <time>{{$single_news->created_at->diffForHumans()}}</time> </small>
        </div>
    @endforeach
    




<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn inside">Sign In</button>
          </div>
        </div>
      </div>
    </div>
<!-- Next Match Jumbotron -->
<div class="bg-light p-5 rounded-lg m-3 match">
<h1 class="display-4">Hello, world!</h1>
<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
<hr class="my-4">
<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

{{-- Newsletter --}}
<form action="/newsletter" method="POST">
  @csrf
<div class="px-">
  <label for="email" class="hidden lg:inline-block">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
  </label>
  <input type="email" id="email" name="email" placeholder="Please input your email here">
</div>
@error('email')
<span class="text-xs text-red-500">{{$message}}</span>
  
@enderror

<div>
<button type="submit">Subscribe</button>
</div>
</form>




   
 



@endsection