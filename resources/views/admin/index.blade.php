@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card">
  <div class="card-header" style="text-align:center; background-color:#737373;">
    <h3 style="color:#a6a6a6;">АДМИНИСТРАТИВНИ ЕЛЕМЕНТИ</h3>
  </div>
  <div class="card-body" style="background-color:#595959;">

  </div>
</div>
</div>
  </div>
  <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h3 style="text-align:center; color:#a6a6a6;">Фондови</h3>
          <div class="row">
                  <div class="col-lg-6">
                    <a href="#" class="btn btn-outline-primary btn-block">Креирај нови</a>
                  </div>
                  <div class="col-lg-6">
                    <a href="#" class="btn btn-outline-primary btn-block">Измени постојећи</a>
                  </div>
            </div>
    <br>
            <h3 style="text-align:center; color:#a6a6a6;">Листе категорија</h3>
            <div class="row">
                    <div class="col-lg-3">
                      <a href="#" class="btn btn-outline-success btn-block">Креирај листу</a>
                    </div>
                    <div class="col-lg-3">
                      <a href="#" class="btn btn-outline-primary btn-block">Измени листу</a>
                    </div>
                    <div class="col-lg-3">
                      <a href="#" class="btn btn-outline-success btn-block">Креирај податак</a>
                    </div>
                    <div class="col-lg-3">
                      <a href="#" class="btn btn-outline-primary btn-block">Измени податак</a>
                    </div>
              </div>
      <br>

                  <h3 style="text-align:center; color:#a6a6a6;">Блог категорије и постови</h3>
                  <div class="row">
                          <div class="col-lg-3">
                            <a href="#" class="btn btn-outline-success btn-block">Креирај категорију</a>
                          </div>
                          <div class="col-lg-3">
                            <a href="#" class="btn btn-outline-primary btn-block">Измени категорију</a>
                          </div>
                          <div class="col-lg-3">
                            <a href="#" class="btn btn-outline-success btn-block">Креирај пост</a>
                          </div>
                          <div class="col-lg-3">
                            <a href="#" class="btn btn-outline-primary btn-block">Измени пост</a>
                          </div>
                    </div>
        <br>



        </div>
    </div>
</div>


@endsection
