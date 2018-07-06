@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href={{asset('css/select2.min.css')}}>
    @endsection

@section('content')

    <div class="main">

        @foreach($errors->all() as $error)

            <div class="alert alert-danger">
                <li>{{ $error }}</li>
            </div>

        @endforeach



        <h3>Create new post!</h3>
        <br>
        <a href={{asset('admin')}} ><button class="back-btn"><i class="fas fa-angle-double-left"></i>Back</button></a>
        <br><br>
        {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group dimgray">
            {{Form::label('images', 'Images')}}
            {{ Form::file('images') }}
        </div>

        <div class="form-group dimgray">
            {{Form::label('headline', 'Headline')}}
            {{Form::text('headline', '', ['class' => 'form-control'])}}
        </div>

        <div class="form-group dimgray">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', '', ['id' => 'article-ckeditor',  'class' => 'form-control'])}}

        </div>

            {{ Form::label('tags', 'Tags:') }}
            <select class="form-control select2-multi" name="tags[]" multiple="multiple" id="">

                @foreach($tags as $tag)

                    <option value="{{ $tag->id }}">
                        {{ $tag->name }}
                    </option>

                    @endforeach
            </select>
            <br>
            <br>
        {{Form::submit('Submit', ['class' =>'btn btn-primary '])}}

        {!! Form::close() !!}

    </div>

@endsection



@section('scripts')
    <script type="text/javascript" src={{asset('js/select2.min.js')}}>

    </script>

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection