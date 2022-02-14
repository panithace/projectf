
@extends('Layout.Project')
{{-- @include('layout.project')--}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}"> --}}

@section('content')

    <h1> My Project </h1>

      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
         @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
        </ul>
       </div>
      @endif

    <form action="/admin/article/create" method="post">
    @csrf
    <div class="form-group">
        <label for="title">title:</label>
        <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="body"> body : </label>
       <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
  </div>
    <button class="btn btn-danger">Send</button>
  </form>
@endsection