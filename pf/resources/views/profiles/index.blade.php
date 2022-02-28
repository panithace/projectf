@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{ $user->profile->profileImage() }}" width="200" height="250">
            <div class="card">
                <div class="card-header">
                 <h3>   {{ $user->username }} </h3>
                 {{--  @can ('user-create')--}}
                <a href="/p/create"> Add New Post </a>
                {{-- @endcan--}}
</div>
               {{-- @can ('update', $user->profile)--}}
                <a href="/profiles/{{ $user->id}}/edit"> Edit User Profile </a>
                {{-- @endcan--}}
                <div class="pt-4 font-weight-bold">{{ $user->profile->Personal_Description }}</div>
                <div> {{ $user->profile->Skills }} </div>
                <div class="pt-4">{{ $user->posts->count() }} posts </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row pt-5">
                        @foreach($user->posts as $post)
                        <div class="col-4"> <a href="/p/{{ $post->id }}">
                            "{{ $post->title }}"</a> </div>
                        <h1 style="border:black;"> </h1>  
                        @endforeach

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
