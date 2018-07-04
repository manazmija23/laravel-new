@extends('layouts.master')

@section('content')

    <div class="main flex-main">



            <div class="col-md-8">
                <h1>Tags</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <th>{{ $tag->id }}</th>
                            <td>{{ $tag->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>



        <div class="create-tag col-md-4">

            <h2>Create Tags</h2>

            {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <br>
            {!! Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing'] ) !!}

            {!! Form::close() !!}


        </div>



    </div>

    @endsection