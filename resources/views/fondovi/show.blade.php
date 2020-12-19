@extends('website.template.master')
@section('content')
<div class="container">
  @foreach($fondovi as $fond)
  <div class="card">
  <div class="card-header" style="background-color:#262626;">
    <div class="row">
      <div class="col-lg-9">
        <h3>Фонд број: {{ $fond->broj_fonda }} - {{ $fond->naziv_fonda }}</h3>
      </div>
      <div class="col-lg-3">
        @can('edit-users')
        <a href="{{route('fondovi.edit', $fond->id)}}" class="btn btn-outline-success btn-small" >Промени</a>
      @endcan
      </div>
    </div>


  </div>
  <div class="card-body" style="background-color:#595959;">

    <p class="card-text">{{ $fond->opis_fonda }}</p>

  </div>
</div>
@endforeach


</div>
</div>


@endsection
