@extends('website.template.master')
@section('content')
<div class="container">

  <br>
  <div class="col-md-12">
    <p><small>Пронађите фонд на основу назива као кључне речи. У поље унесите тражени појам</small></p>
    <form class="" action="/search" method="get">
      <div class="input-group">
        <input type="search" name="search" class="form-control" placeholder="Претрага по називу фонда">
        <span class="input-group-prepend">
          <button type="submit" class="btn btn-primary">Пронађи</button>&nbsp &nbsp &nbsp &nbsp
          @can('create-users')
          <a href="{{ route('fondovi.create') }}" class="btn btn-success float-right">Унеси нови</a>
        @endcan
        </span>
      </div>
    </form>
  </div>


 <br>
<h3 class="text-center">Листа фондова у Архиву</h3>
<br>
  <table class="table">
    <thead>

      <tr>

        <th scope="col">#</th>
        <th scope="col">Број фонда</th>
        <th scope="col">Назив фонда</th>
        <th scope="col">Година настанка</th>
        <th scope="col">Година престанка</th>
        <th scope="col">Опис фонда из Водича</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fondovi as $fond)
      <tr>
        <a href="{{ url('fond/'.$fond->id) }}">
        <th scope="row"></th>
        <td>{{$fond->broj_fonda}}</td>
        <td>{{$fond->naziv_fonda}}</td>
        <td>{{$fond->godina_nastanka}}</td>
        <td>{{$fond->godina_zavrsetka}}</td>
        <td><a href="{{ url('fondovi/' . $fond->opis_fonda) }}">{{$fond->opis_fonda}}</a></td>
      </a>
      </tr>
      
        @endforeach

    </tbody>
  </table>




</div>


@endsection
