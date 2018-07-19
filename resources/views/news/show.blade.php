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

        <div class="row" style="margin-top: 15px">

            <div class="comment-form">
                {{ Form::open(['route' => ['comments.store', $posts->id], 'method' => 'POST']) }}

                {{ csrf_field() }}

                <h3 style="color: dimgrey">Dodaj Komentar</h3>

                <div class="row">

                    <div class="col-md-6 dimgray">
                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, ['class' => 'form-control'] )}}
                    </div>

                    <div class="col-md-6 dimgray">
                        {{ Form::label('email', "Email:") }}
                        {{ Form::text('email', null, ['class' => 'form-control'] )}}
                    </div>

                    <div class="col-md-12 dimgray">
                        {{ Form::label('comment', "Comment:") }}
                        {{ Form::textarea('comment', null, ['class' => 'form-control','id' => 'summernote','rows' => '5', ] )}}

                        <br>

                        {{ Form::submit('Add Comment', ['class' => 'btn btn-info btn-block']) }}
                    </div>

                </div>

                {{ Form::close() }}
            </div>
        </div>


    </div>

@endsection