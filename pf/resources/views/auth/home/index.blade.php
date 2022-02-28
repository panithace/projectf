@extends('layouts.app')

@section('content')
<div class="container">
<a href="/home/index" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByTime</a>
<a href="/profiles/{{ $post->user->id}}"> class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByComment</a>
<a href="/profiles/{{ $post->user->id}}"> class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByLike</a>
</div>
@endsection
