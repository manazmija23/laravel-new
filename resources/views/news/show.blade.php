@extends('layouts.master')


@section('content')

    <div class="main">

        <a href={{'/'}}>
            <button class="back-btn"><i class="fas fa-angle-double-left"></i>Back</button>
        </a>

        <div class="blog-article blog-single">

            <img class="img-blog-full" src={{asset('/storage/images/' . $posts->images)  }} alt="">
            <h1>{{$posts->headline}}</h1>
            <br>
            <p>{!! $posts->content !!}</p>
            <hr>

            <div class="tags">

                @foreach($posts->tags as $tag)

                    <span class="label label-primary">{{$tag->name}}</span>

                @endforeach


            </div>

            <div class="published">
                <span>
                   Published: {{$posts->created_at}}
                </span>
            </div>

        </div>


    </div>

@endsection