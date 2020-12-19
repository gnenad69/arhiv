@extends('layouts.app')

@section('stylesheet')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:#262626; color:white;">
                <div class="card-header">Креирај нови пост</div>


                <div class="card-body" style="background-color:#404040;">
                    {!! Form::open(['route'=>'posts.store']) !!}
                      <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                        {!! Form::label('Сличица') !!}
                        {!! Form::text('thumbnail', null, ['class'=>'form-control', 'placeholder'=>'Сличица']) !!}
                        @if($errors->has('thumbnail'))
                          <span class="help-block">{!!$errors->first('thumbnail')!!}</span>
                        @endif
                      </div>

                      <div class="form-group @if($errors->has('title')) has-error @endif">
                        {!! Form::label('Наслов') !!}
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Наслов поста']) !!}
                        @if($errors->has('title'))
                          <span class="help-block">{!!$errors->first('title')!!}</span>
                        @endif
                      </div>

                      <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                        {!! Form::label('Поднаслов') !!}
                        {!! Form::text('sub_title', null, ['class'=>'form-control', 'placeholder'=>'Поднаслов']) !!}
                        @if($errors->has('sub_title'))
                          <span class="help-block">{!!$errors->first('sub_title')!!}</span>
                        @endif
                      </div>

                      <div class="form-group @if($errors->has('details')) has-error @endif">
                        {!! Form::label('Текст') !!}
                        {!! Form::textarea('details', null, ['class'=>'form-control', 'placeholder'=>'Текст поста']) !!}
                        @if($errors->has('details'))
                          <span class="help-block">{!!$errors->first('details')!!}</span>
                        @endif
                      </div>

                      <div class="form-group @if($errors->has('category->id')) has-error @endif">
                        {!! Form::label('Категорија') !!}
                        {!! Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'id' => 'category_id', 'multiple' => 'multiple']) !!}
                        @if($errors->has('category->id'))
                          <span class="help-block">{!!$errors->first('category->id')!!}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        {!! Form::label('Објављено') !!}
                        {!! Form::select('is_published', [1 => 'Објави', 0 => 'На чекању'], null, ['class'=>'form-control']) !!}

                      </div>
                      {!! Form::submit('Креирај',  ['class'=>'btn btn-sm btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
          </div>
    </div>
</div>
@endsection

@section('javascript')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


  <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');
            $('#category_id').select2({
                placeholder: "Select categories"
            });
        });
    </script>
@endsection
