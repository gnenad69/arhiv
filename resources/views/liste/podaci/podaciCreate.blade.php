@extends('website.template.master')

@section('content')
<div class="container">


<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header" style="background-color:#262626;">Unesi novi Podatak</div>

      <div class="card-body" style="background-color:#595959;">
        <form action="{{ route('podaciStore') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
          <label for="title">Vrsta predmeta</label>
          <input type="text" name="title" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="rok">Rok cuvanja</label>
              <input type="text" name="rok_cuvanja" class="form-control">
            </div>
          </div>
          <input type="hidden" name="lista_id" value="{{ $lista->id }}">
          <br>
          <div class="row">
            <div class="col-md-12">
            <label for="primedba">Primedba</label>
            <textarea name="primedba" class="form-control"></textarea>
          </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Unesi podatke</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
