@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">
    <div class="row mb-3">
             <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                 <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        @error('title')
                             <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
            </div> 
            <div class="row mb-3">
                            <label for="body" class="col-md-4 col-form-label text-md-end">{{ __('Body') }}</label>

                            <div class="col-md-6">
                                <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required autocomplete="body" autofocus>

                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="row">
                                    <button class="btn btn-primary">Add New Post </button>
</div>
                            </div>
                        </div>   
    </div>
   
</div>
@endsection
