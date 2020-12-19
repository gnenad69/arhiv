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
          <p class="header_subtitle mb-4" data-aos="zoom-in-left" data-aos-delay="200">Историјски архив града Новог Сада, све јавне набавке.</p>

        </div>
      </div>
    </div>
  </header>
<br><br><br><br>
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          @foreach($posts as $post)
            <a href="{{ url('post/' . $post->slug) }}">
          <div class="col-lg-12 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <h5 class="post-title">{{$post->sub_title}}</h5>
            <p class="sub_title mb-0"><small>{{$post->details}}</small></p>
            <p class="post-meta">Објавио
              <a href=""> {{$post->user->name}} </a>
              дана {{ date('M d, Y', strtotime($post->created_at)) }}
              @if(count($post->categories)>0)
              | <span class="post-category">
                Категорија :
                @foreach($post->categories as $category)
                <a href="{{ url('category/'.$category->slug) }}">{{$category->name}}</a>
              @endforeach
              </span>
            @endif
            </p>
          </div>
        </a>
        @endforeach
  </div>
  </div>
  </div>

  </article>

<div class="container">
  <div class="clearfix mt-4">
    {{ $posts->links() }}
  </div>
</div>


@endsection
