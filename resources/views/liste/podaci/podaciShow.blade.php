@extends('layouts.app')

@section('content')
<div class="container">


  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
          <div class="card-header">Actions</div>

          <div class="card-body">
            <a href="{{route('podaciEdit', $podatak->id)}}" class="btn btn-success btn-block">Edit Photo</a>
            <a href="{{route('podaciDelete', $podatak->id)}}" class="btn btn-danger btn-block">Delete Photo</a>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
          <div class="card-header">{{$podatak->title}}</div>

          <div class="card-body">
            <div class="row">
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vrsta predmeta</th>
                        <th scope="col">Rok cuvanja</th>
                        <th scope="col">primedba</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($podaci as $podatak)
                      <tr>
                        <th scope="row"></th>
                        <td>{{$podatak->title}}</td>
                        <td>{{$podatak->rok_cuvanja}}</td>
                        <td>{{$podatak->primedba}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
            <div class="row">
              <div class="col-md-12">

              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
