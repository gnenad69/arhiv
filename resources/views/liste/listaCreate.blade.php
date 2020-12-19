@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Kreiraj novu listu</div>

      <div class="card-body">
        <form action="{{ route('listaStore') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
          <label for="title">Naslov liste</label>
          <input type="text" name="title" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="cover">Foto liste</label>
              <input type="file" name="cover" class="form-control">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
            <label for="description">Opis liste</label>
            <textarea name="description" class="form-control"></textarea>
          </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create Listu</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
