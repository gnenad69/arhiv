@extends('website.template.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#262626;">Liste kategorija</div>

                <div class="card-body" style="background-color:#595959;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row ">
                      @foreach($lista as $list)
                      <div class="col-md-3">
                        <a href="{{ route('listaShow', $list->id) }}">
                        <img src="{{ asset('/liste/' . $list->cover) }}" alt="cover" width="150px">
                        <p class="text-center" style="color:white;" >{{ $list->title }}</p>

                      </a>
                      </div>
                    @endforeach
                    </div>


                </div>
            </div>
            <!-- DRUGA VARIJANTA -->

        </div>

    </div>
    <br><br>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background-color:#262626;"><h4 style="text-align: center;">Odaberite zeljenu listu kategorija</h4></div>

            <div class="card-body" style="background-color:#595959;">

            </div>
        </div>
      </div>
    </div>
</div>
@endsection
