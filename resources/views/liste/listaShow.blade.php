@extends('website.template.master')

@section('content')
<div class="container">


<div class="row justify-content-center">
  <div class="col-md-9">
    <div class="card">
        <div class="card-header" style="background-color:#262626;">
          <h5 style="text-align: center;">Листе категорија</h5>
        </div>

        <div class="card-body" style="background-color:#595959;">
          <div class="row">
            <div class="col-md-12">
              <h3 style="text-align: center;">{{ $lista->title }}</h3></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

              <p>{{ $lista->description }}</p>

            </div>
          </div>
          <div class="row">

              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Врста предмета</th>
                        <th scope="col">Рок чувања</th>
                        <th scope="col">Примедба</th>
                        <th scope="col">Акција</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($podaci as $podatak)
                      <tr>
                        <th scope="row"></th>
                        <td style="width: 60%">{{$podatak->title}}</td>
                        <td style="width: 15%">{{$podatak->rok_cuvanja}}</td>
                        <td style="width: 25%">{{$podatak->primedba}}</td>
                        @can('edit-users')
                        <td><a href="{{route('podaciEdit', $podatak->id)}}" class="btna"><i class="fa fa-edit"></i></a></td>
                        @endcan
                        @can('delete-users')
                        <td><a href="{{route('podaciDelete', $podatak->id)}}" class="btna"><i class="fa fa-trash"></a></td>
                      @endcan
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


          </div>
        </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card">
        <div class="card-header" style="background-color:#262626;">{{$lista->title}}</div>

        <div class="card-body text-center" style="background-color:#595959;">
          <img src="{{ asset('/liste/' . $lista->cover) }}" alt="cover" width="100%">
          <br><br>
          @can('create-users')
          <a href="{{ route('podaciCreate', $lista->id) }}" class="btn btn-warning btn-block">Нови податак</a>
          @endcan
          <br>
          @can('edit-users')
          <a href="{{route('podaciEdit', $podatak->id)}}" class="btn btn-success btn-block">Измени листу</a>
          @endcan
          <br>
          @can('delete-users')
          <a  href="{{route('podaciDelete', $podatak->id)}}" class="btn btn-danger btn-block">Обриши листу</a>
          @endcan

        </div>
    </div>
  </div>

</div>
</div>
@endsection
