@extends('layouts.master')

@section('content')

    <div class="main">

        <div class="flex-main">



            <div class="flex-articles">
                @foreach($posts as $post)

                    <div class="blog-article">

                        <img class="card-img img-blog" src="/storage/images/{{$post->images}}" alt="">

                        <a href="/posts/{{$post->id}}"><h1>{{$post->headline}}</h1></a>
                        <br>
                        <p>{!! Str_limit($post->content, 300) !!}</p>
                        <a href="/posts/{{$post->id}}">Full Article →</a>
                        <br>
                        <hr>
                        <div class="flex-row d-flex justify-content-between">
                            <div class="flex-row d-flex justify-content-between width-50">
                                <i class="fas fa-thumbs-up"></i>
                                <i class="fas fa-thumbs-down"></i>
                            </div>

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$post->id}}">Read Here</button>
                        </div>



                        <div class="published">
                            <span>
                               Published: {{$post->created_at}}
                            </span>
                        </div>


                    </div>

                    <!-- Trigger the modal with a button -->


                    <!-- Modal -->
                    <div id="{{$post->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a href="/posts/{{$post->id}}"><h2>{{$post->headline}}</h2></a>
                                </div>
                                <div class="modal-body">
                                    <img class="card-img img-blog" src="/storage/images/{{$post->images}}" alt="">
                                    <br>
                                    <p class="modal-text">{!! $post->content !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            </div>

            <div class="sidebar">
                <div class="table table-striped sidebar-flex">
                    <h3>Archive</h3>
                    <hr>
                    <a href="/">All News</a>

                    @foreach($archives as $arch)

                        <a href="/?month={{ $arch['month'] }}&year={{ $arch['year']}}">

                            {{$arch['month'] . ' ' . $arch['year']}}

                        </a>

                    @endforeach
                </div>
            </div>

        </div>

        <div class="paginate">
            {{ $posts->links() }}
        </div>

    </div>

@endsection
