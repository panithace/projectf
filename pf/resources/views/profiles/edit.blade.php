@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profiles/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    <div class="row">
        <h2> Edit Your Profile </h2>
</div>
    <div class="row mb-3">
             <label for="Personal_Description" class="col-md-4 col-form-label text-md-end">{{ __('Personal Description') }}</label>
                 <div class="col-md-6">
                    <input id="Personal_Description" type="text" class="form-control @error('Personal_Description') is-invalid @enderror" name="Personal_Description" value="{{ old('Personal_Description') ?? $user->profile->Personal_Description }}" required autocomplete="Personal_Description" autofocus>
                        @error('Personal_Description')
                             <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
            </div> 
            <div class="row mb-3">
                            <label for="Skills" class="col-md-4 col-form-label text-md-end">{{ __('Skills') }}</label>

                            <div class="col-md-6">
                                <input id="Skills" type="text" class="form-control @error('Skills') is-invalid @enderror" name="Skills" value="{{ old('Skills') ?? $user->profile->Skills }}" required autocomplete="Skills" autofocus>

                                @error('Skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') ?? $user->profile->first_name }}" autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?? $user->profile->last_name }}" autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="image" name="image">

                                @if ($errors->has('image'))
                                        <strong>{{ $errors->first('image') }}</strong>
                               @endif
                               </div> 
                                <div class="row">
                                    <button class="btn btn-primary"> Save! </button>
                                </div>
                            </div>
                        </div>   
    </div>
</div>
@endsection
