@extends('layouts.master')

@section('content')

    <div class="main">


        <h1>
            {{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small>
        </h1>


    </div>

@endsection