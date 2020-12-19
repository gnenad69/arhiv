@extends('website.template.master')
@section('content')
<div class="container"
  <div class="d-flex vw-100 vh-100 justify-content-center align-item-center">
    <h4 class="text-center">Create Fond</h4>
    <form method="POST" action="{{ route('fondovi.store') }}">
      @csrf
      <div class="form-group">
        <label for="broj">Broj fonda</label>
        <input type="text" name="broj_fonda" class="form-control" id="broj"  placeholder="Broj">

      </div>
      <div class="form-group">
        <label for="naziv">Naziv fonda</label>
        <input type="text" name="naziv_fonda" class="form-control" id="naziv" placeholder="Naziv fonda">
      </div>
      <div class="form-group">
        <label for="godina1">Godina nastanka</label>
        <input type="text" name="godina_nastanka" class="form-control" id="godina1">
      </div>
      <div class="form-group">
        <label for="godina2">Godina zavrsetka</label>
        <input type="text" name="godina_zavrsetka" class="form-control" id="godina2">
      </div>
      <div class="form-group">
        <label for="Vodic">Opis fonda</label>
        <textarea type="text" name="opis_fonda" class="form-control" id="vodic"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Snimi</button>
    </form>
  </div>
</div>
@endsection
