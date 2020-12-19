@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:#262626; color:white;">
                <div class="card-header">Нова категорија</div>


                <div class="card-body" style="background-color:#404040;">
                    {!! Form::open(['route'=>'categories.store']) !!}
                      <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                        {!! Form::label('Сличица') !!}
                        {!! Form::text('thumbnail', null, ['class'=>'form-control', 'placeholder'=>'Сличица']) !!}
                        @if($errors->has('thumbnail'))
                          <span class="help-block">{!!$errors->first('thumbnail')!!}</span>
                        @endif
                      </div>

                      <div class="form-group @if($errors->has('name')) has-error @endif">
                        {!! Form::label('Назив') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Назив категорије']) !!}
                        @if($errors->has('name'))
                          <span class="help-block">{!!$errors->first('name')!!}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        {!! Form::label('Објављено') !!}
                        {!! Form::select('is_published', [1=>'Објави', 0=>'На чекању'], null, ['class'=>'form-control']) !!}

                      </div>
                      {!! Form::submit('Креирај',  ['class'=>'btn btn-sm btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
