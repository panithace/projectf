@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div> 
        <div>
          <img src="{{ $post->user->profile->profileImage() }}" width="50" height="65">
</div> 
<div>
      <div class="font-weight-bold"><a href="/profiles/{{ $post->user->id}}">{{ $post->user->username }}</a></div>
</div>
    </div>
    <div class="col-8">
"{{ $post->title }}"
</div>
<div class="col-4">
    
    <p> {{ $post->body }} </p>

    <!-- Add Comment -->
    <section class="col-span-8 col-start-5 mt-10 space-y-6">
        <form method="POST" action="/p/{{ $post->id }}">
            @csrf
                <header class="flex">      
                <h5> Comments </h5>
                </header>
                <div>
                    <textarea name="body" cols="30" rows="3"></textarea>
</div>
<div>
    <button type="submit">send</button>
</div>
</form>
@foreach ($post->comments as $comment)
                        <x-comments :comment="$comment" />
                    @endforeach
                </section>
                <div class="post">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    @include('like', ['model' => $post])
</div>
</div>
</div>
</div>
@endsection
