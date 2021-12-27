@if($single_news->comments->count())
@foreach ($single_news->comments as $comment)
<section class="col-span-8 col-start-5 mt-10 bg-gray-100">
    <article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
        <div class="flex-shrink0">
            <img src="https://i.pravatar.cc/150?u={{$comment->user_id}}" alt="" class="rounded-xl">
        </div>
        <div>
            <header>
                <h3 class="font-bold">{{$comment->author->username}}</h3>
                <p class="text-xs">
                    <time>{{$comment->created_at->format("F j, Y, g:i a")}}</time>
                </p>
        </header>
        <p>{{$comment->body}}</p>

        </div>
        
       
    </article>
</section>
@endforeach
@else
<div>
    <p>No comments yet, Be the first to comment</p>
</div>
@endif
