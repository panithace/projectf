<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Final </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Post </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
    </ul>
    <form action="">
        <div class="form-group">
      <input type="search" name="search" id="" class="form-control" placeholder="Search" value="{{$search}}" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <div class="container">
<a href="/home/index" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByTime</a>
{{--<a href="/profiles/{{ $post->user->id}}"> class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByComment</a> --}}
{{--<a href="/profiles/{{ $post->user->id}}"> class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OrderByLike</a> --}}
</div>
</div>
    </form>
  </div>
</div>
</nav>
<main class="container">
    <div class="row">
    @foreach($posts as $post)
        <div class="col-4"> <a href="/p/{{ $post->id }}">
             "{{ $post->title }}"</a> </div>
         <h1 style="border:black;"> </h1>  
         @endforeach
    
</div>

</main>
</body>
</html>