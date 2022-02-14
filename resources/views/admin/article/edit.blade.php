@extends('Layout.Project')


@section('content')

    <h1> My Edits </h1>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
      </ul>
</div>
@endif
  <form action="/admin/article/{{ $article->id }}/edit" method="post">
     @csrf
     @method('put')
     <div class="form-group">
       <label for="title"> title: </label>
       <input type="text" name="title" class="form-control" value="{{ $article->title }}">
    </div>
    <div class="form-group">
       <label for="body"> body: </label>
       <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $article->body }}</textarea>
    </div>
    <button class="btn btn-info">update</button>
  </form>
@endsection