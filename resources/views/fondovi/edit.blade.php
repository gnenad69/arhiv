@extends('website.template.master')
@section('content')
<div class="container">
<h3 class="text-center">Измена података о фонду</h3>
<div class="row">

  <div class="col-lg-9">


    <form method="POST" action="{{ route('fondovi.update', $fondovi->id) }}">
      @csrf
      {{ method_field('PUT') }}
      <div class="form-group">
        <label for="broj">Број фонда</label>
        <input type="text" value="{{ $fondovi->broj_fonda }}" name="broj_fonda" class="form-control" id="broj"  placeholder="Broj">

      </div>
      <div class="form-group">
        <label for="naziv">Назив фонда</label>
        <input type="text" value="{{ $fondovi->naziv_fonda }}" name="naziv_fonda" class="form-control" id="naziv" placeholder="Naziv fonda">
      </div>
      <div class="form-group">
        <label for="godina1">Година настанка</label>
        <input type="text" value="{{ $fondovi->godina_nastanka }}" name="godina_nastanka" class="form-control" id="godina1">
      </div>
      <div class="form-group">
        <label for="godina2">Година завршетка</label>
        <input type="text" value="{{ $fondovi->godina_zavrsetka }}" name="godina_zavrsetka" class="form-control" id="godina2">
      </div>
      <div class="form-group">
        <label for="Vodic">Опис фонда</label>
        <textarea type="text" value="{{ $fondovi->opis_fonda }}" name="opis_fonda" class="form-control" id="vodic">{{ $fondovi->opis_fonda }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Сачувај</button>
    </form>

  </div>
  <div class="col-lg-3">
    <h6 class="text-center">Промена података</h6>
    <div class="card">
  <div class="card-header" style="background-color:#262626;">
    Измена на листи Фондова
  </div>
  <div class="card-body" style="background-color:#595959;">
    <h5 class="card-title">Обавештење</h5>
    <p class="card-text">Пажљиво прегледајте измене које ће се уписати у базу. Измене можете поново радити истим поступком.</p>

  </div>
</div>
  </div>
</div>

</div>


@endsection
