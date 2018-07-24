@extends('layouts.master')

@section('content')

    <div class="main flex">


        <a class="btn btn-info admin-button" href="/admin/create">Add New</a>

        <div class="flex-articles">

            @foreach($posts as $post)

                <div class="blog-article blog-admin-article">
                    <img class="img-fluid img-blog" src={{ 'storage/images/' . $post->images }} alt="">
                    <h1>{{ $post->headline }}</h1>
                    <p>{!! str_limit($post->content, 300) !!}</p>
                    <br>
                    <br>
                    <div class="flex-button">
                        <form action="{{route('admin.destroy', $post->id)}}" method="POST">
                            <input name="_method" type="hidden" value="delete">
                            {{csrf_field()}}
                            <button class="btn-danger btn-lg" type="submit">Delete</button>
                        </form>

                        <a href="/admin/{{$post->id}}/edit">
                            <button class="btn-info btn-lg">Edit</button>
                        </a>
                    </div>

                </div>

            @endforeach
        </div>

        {{$posts->links()}}
    </div>

@endsection
