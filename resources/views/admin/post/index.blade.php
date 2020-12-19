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
                <div class="card-header">Постови листа
                  <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Нови пост</a>
                </div>


                <div class="card-body" style="background-color:#404040;">
                    <table class="table table-bordered mb-0" style="color:white;">
                      <thead>
                        <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col" width="60" >Наслов</th>
                          <th scope="col" width="200">Креирао</th>
                          <th scope="col" width="60">Активност</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <td>{{ $post->id }}</td>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->user->name }}</td>
                          <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Измени</a>
                            {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete', 'style' => 'display:inline']) !!}
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
