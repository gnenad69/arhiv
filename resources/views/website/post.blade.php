@extends('website.template.master')

@section('content')

  <header class="main_header">
    <div class="container">
      <!-- row -->
      <div class="row align-items-center">
        <!-- col -->
        <div class="col-lg-6 pr-lg-5 d-lg-block d-none">
          <img src="{{ asset('images/illustrations/arhiva.png') }}" class="header_image img-fluid" alt="image">
        </div>
        <!-- col -->
        <div class="col-lg-6 text-md-left text-center">
          <!-- header title -->
          <h2 class="header_title position-relative " data-aos="zoom-in-left">Јавне набавке</h2>
          <!-- header subtitle -->
          <p class="header_subtitle mb-4" data-aos="zoom-in-left" data-aos-delay="200">Историјски архив града Новог Сада, појединачна јавна набавка.</p>

        </div>
      </div>
    </div>
  </header>
  <br><br><br>
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    <div class="card" style="background-color:#262626;">
    <div class="card-header" style="background-color:#404040;">
      <h2>{{ $post->title }}</h2>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $post->sub_title }}</h5>
      <p class="card-text">{!! $post->details !!}</p>
      <span class="meta">Креирао -
        <a href="">{{ $post->user->name }}</a>
        | {{ date('M d, Y', strtotime($post->created_at)) }}

      </span>

    </div>
  </div>
  </div>
  </div>
  </div>

  </article>







@endsection
