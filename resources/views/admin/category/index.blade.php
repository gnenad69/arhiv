@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
  <div class="col">
    @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ Session('message') }}
      </div>
    @endif
    @if(Session::has('delete-message'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ Session('delete-message') }}
      </div>
    @endif
  </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:#262626; color:white;">
                <div class="card-header">Категорије листа
                  <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right">Нова категорија</a>
                </div>


                <div class="card-body" style="background-color:#404040;">
                    <table class="table table-bordered mb-0" style="color:white;">
                      <thead>
                        <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col" width="60" >Назив</th>
                          <th scope="col" width="200">Креирао</th>
                          <th scope="col" width="60">Активност</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <td>{{ $category->id }}</td>
                          <td>{{ $category->name }}</td>
                          <td>{{ $category->user->name }}</td>
                          <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-primary">Измени</a>
                            {!! Form::open(['route'=>['categories.destroy', $category->id], 'method'=>'delete', 'style' => 'display:inline']) !!}
                            {!! Form::submit('Обриши', ['class'=>'btn btn-sm btn-danger']) !!}

                            {!! Form::close() !!}
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
