@extends('website.template.master')

@section('content')


  <!-- HEADER -->
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
          <h2 class="header_title position-relative " data-aos="zoom-in-left">Историјски архив града Новог Сада</h2>
          <!-- header subtitle -->
          <p class="header_subtitle mb-4" data-aos="zoom-in-left" data-aos-delay="200">Our revolutionary Cloud solution is powerful, simple, and surprisingly affordable. Harnessing the web has never been easier.</p>
          <!-- buttons -->
          <div class="buttons d-md-flex align-items-center" data-aos="zoom-in-left" data-aos-delay="300">
            <a href="#" class="theme_primary_fill_btn text-uppercase mr-md-1 mb-md-0 mb-1">get started</a>
            <a href="#" class="theme_primary_transparent_btn text-uppercase"><i class="fa fa-play mr-1"></i>learn more</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- SE I -->
  <!-- CETIRI POLJA ZA SLUZBE ARHIVA -->
  <div class="se_i py_80 text-md-left text-center">
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-2" data-aos="zoom-in-left" data-aos-delay="400">
          <!-- box -->
          <div class="box">
            <!-- icon -->
            <img src="{{ asset('images/svg_icons/pravna.jpg') }}" class="" style="width:100%;" alt="pravo">
            <!-- title -->
            <h6 class="box_title mb-0">Правна служба</h6>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-2" data-aos="zoom-in-left" data-aos-delay="450">
          <!-- box -->
          <div class="box">
            <!-- icon -->
            <img src="{{ asset('images/svg_icons/logout.svg') }}" class="box_icon mb-2" alt="icon">
            <!-- title -->
            <h6 class="box_title mb-0">Спољна<br>служба</h6>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-6 mb-md-0 mb-2" data-aos="zoom-in-left" data-aos-delay="500">
          <!-- box -->
          <div class="box">
            <!-- icon -->
            <img src="{{ asset('images/svg_icons/stranke.jpg') }}" class="" style="width:100%;" alt="stranke">
            <!-- title -->
            <h6 class="box_title mb-0">Рад са странкама</h6>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-6 mb-lg-0" data-aos="zoom-in-left" data-aos-delay="550">
          <!-- box -->
          <div class="box">
            <!-- icon -->
            <img src="{{ asset('images/svg_icons/istrazivaci.jpg') }}" class="" style="width:100%;" alt="istrazivaci">

            <!-- title -->
            <h6 class="box_title mb-0">Рад са Истраживачима</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- KRAJ 4 POLJA ZA SLUZBE ARHIVA -->

  <!-- SE II -->


  <div class="se_ii py_80 bg_2 text-md-left text-center" id="ele_2">
    <div class="container">
      <!-- section title -->

      <!-- JAVNE NABAVKE -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class=" col-lg-4 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Јавне<br>набавке  </h3>
          </div>
          <!-- col -->

          @foreach($posts as $post)

            <a href="{{ url('post/' . $post->slug) }}">
          <div class=" col-lg-4 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <h5 class="post-title">{{$post->title}} - {{$post->sub_title}}</h5>
            <p class="sub_title mb-0"><small  style="color:white;">{!! Str::limit($post->details, 120, ' ...') !!}</small></p>
            <p class="post-meta"><small>Објавио - </small>
              <a href=""><small> {{$post->user->name}} </small></a>
              | <small> {{ date('M d, Y', strtotime($post->created_at)) }}</small>
              @if(count($post->categories)>0)
              | <span class="post-category">
                <small>Category :</small>
                @foreach($post->categories as $category)
                <a href="{{ url('category/'.$category->slug) }}"><small>{{$category->name}}</small></a>
              @endforeach
              </span>
            @endif
            </p>
          </div>
        </a>

        @endforeach

        </div>
      </div>
      <!-- KRAJ JAVNE NABAVKE -->

      <!-- BLOG POLJA -->
      <!-- plans nav -->
      <ul id="plans_nav" class="plans_nav list-unstyled mb-0 d-flex align-items-center justify-content-center">
        <li data-plan="#" class="active text-center text-uppercase mr-1" data-aos="zoom-in-up" data-aos-delay="100">Blog</li>

      </ul>
      <!-- plans -->
      <div class="theme_plans">
        <!-- row & plan row -->
        <div class="row mx-lg-0 plan_row" id="plan_one">
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-2 px-lg-0" data-aos="zoom-in-left" data-aos-delay="100">
            <!-- card -->

            <div class="theme_card hot_card h-100" style="padding-top:5px;">
              <!-- card head -->
              <div class="card_head mb-5">
                <!-- card title -->
                <h5 class="card_title text-uppercase mb-1 text-center" >Arhiv</h5>
                <img src="{{ asset('images/stranice/proba.jpg') }}" class="" style="width:100%;" alt="istrazivaci">
                <!-- card subtitle -->
                <p class="card_sub_title mb-00">Новосадски Дневник као архивски фонд</p>
              </div>
              <!-- card price -->
              <div class="card_price mb-5">
                <!-- currency -->

                <!-- action button -->
                <a href="#" class="theme_primary_fill_btn text-center">Детаљније</a>
              </div>
              <!-- card features -->

            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-2 px-lg-0" data-aos="zoom-in-left" data-aos-delay="150">
            <!-- card & hot card -->
            <div class="theme_card h-100" style="padding-top:5px;">
              <!-- card head -->
              <div class="card_head mb-5">
                <!-- card title -->
                <h5 class="card_title text-uppercase mb-1 text-center">Istorija</h5>
                <!-- card subtitle -->
                <p class="card_sub_title mb-00">realy Database will be free if you use only one data source.</p>
              </div>
              <!-- card price -->
              <div class="card_price mb-5">
                <!-- currency -->
                <div class="currency mb-2">$23.55 /<small>month</small></div>
                <!-- action button -->
                <a href="#" class="theme_primary_fill_btn text-uppercase">get started</a>
              </div>
              <!-- card features -->

            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-md-0 mb-2 px-lg-0" data-aos="zoom-in-left" data-aos-delay="200">
            <!-- card -->
            <div class="theme_card hot_card h-100" style="padding-top:5px;">
              <!-- card head -->
              <div class="card_head mb-5">
                <!-- card title -->
                <h5 class="card_title text-uppercase mb-1 text-center">Zanimljivosti</h5>
                <!-- card subtitle -->
                <p class="card_sub_title mb-00">realy Database will be free if you use only one data source.</p>
              </div>
              <!-- card price -->
              <div class="card_price mb-5">
                <!-- currency -->
                <div class="currency mb-2">$49.99 /<small>month</small></div>
                <!-- action button -->
                <a href="#" class="theme_primary_fill_btn text-uppercase">get started</a>
              </div>
              <!-- card features -->

            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 px-lg-0" data-aos="zoom-in-left" data-aos-delay="250">
            <!-- card -->
            <div class="theme_card h-100" style="padding-top:5px;">
              <!-- card head -->
              <div class="card_head mb-5">
                <!-- card title -->
                <h5 class="card_title text-uppercase mb-1 text-center">Нови Сад</h5>
                <!-- card subtitle -->
                <p class="card_sub_title mb-00">realy Database will be free if you use only one data source.</p>
              </div>
              <!-- card price -->
              <div class="card_price mb-5">
                <!-- currency -->
                <div class="currency mb-2">$99.99 /<small>month</small></div>
                <!-- action button -->
                <a href="#" class="theme_primary_fill_btn text-uppercase">get started</a>
              </div>
              <!-- card features -->
              <!-- KRAJ BLOG POLJA -->

            </div>
          </div>
        </div>
        <!-- row & plan row -->

      </div>
    </div>
  </div>

  <!-- SE III -->
  <div class="se_iii py_80 text-md-left text-center" id="ele_3">
    <div class="container">
      <!-- section title -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Фондови и <br>Публикације</h3>
          </div>
          <!-- col -->
          <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <p class="sub_title mb-0">Leave your system management to the experts so that you can focus your energy on what you do best.</p>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="content">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-in-left" data-aos-delay="100">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/fondovi.png') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1"><a href="{{route('fondovi.index')}}">Фондови архива</a></h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">Приказ фондова Архива и њихови описи кроз Водич архивских фондова.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-in-left" data-aos-delay="150">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/publikacije.png') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Публикације</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">Водич кроз архивске публикације и издања. Преузмите објављена издања.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-in-left" data-aos-delay="200">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/listaKategorija.png') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1"><a href="{{ route('homee') }}">Листа категорија</a></h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-in-left" data-aos-delay="250">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/biblioteka.png') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Библиотека архива</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
<hr>

          <div class="section_title">
            <!-- row -->
            <div class="row align-items-end">
              <!-- col -->
              <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
                <h3 class="title mb-0">Галерија<br>Фотографија</h3>
              </div>
              <!-- col -->
              <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
                <p class="sub_title mb-0">Leave your system management to the experts so that you can focus your energy on what you do best.</p>
              </div>
            </div>
          </div>


          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-3" data-aos="zoom-in-left" data-aos-delay="300">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/medal.svg') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Award security</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-3" data-aos="zoom-in-left" data-aos-delay="350">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/cloud-computing.svg') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Upgrade Management</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-md-0 mb-3" data-aos="zoom-in-left" data-aos-delay="400">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/mail_2.svg') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Email Service</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in-left" data-aos-delay="450">
            <!-- box -->
            <div class="box">
              <!-- icon -->
              <img src="{{ asset('images/svg_icons/ladybug.svg') }}" class="box_icon mb-2 img-fluid" alt="icon">
              <!-- title -->
              <h5 class="box_title text-uppercase mb-1">Bug Fix Guarantee</h5>
              <!-- border -->
              <span class="box_border d-block mx-md-0 mx-auto mb-1"></span>
              <!-- info -->
              <p class="box_info mb-0">It’s hard to believe anyone would want to harm your website, but they do. Thankfully.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SE IV PRAVNI I OSTALI AKTI-->
  <div class="se_iv py_80 bg_2" id="ele_4">
    <div class="container">
      <!-- section title -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Правни и други акти<br>Архива Новог Сада</h3>
          </div>
          <!-- col -->
          <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <p class="sub_title mb-0">We offer offer multiple VPS Hosting options each featuring distinctly different management levels and VPS features. Each option is carefully crafted to ensure you get a VPS to meet your unique needs.</p>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="content">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
            <!-- card -->
            <div class="theme_card">
              <!-- head -->
              <div class="card_head position-relative text-center">
                <!-- title -->
                <h5 class="card_title text-uppercase mb-0">Pravni akti</h5>
                <!-- icon -->
                <img src="{{ asset('images/svg_icons/automation.svg') }}" class="card_icon position-absolute img-fluid" alt="icon">
              </div>
              <!-- body -->
              <div class="card_body d-flex">
                <!-- row -->
                <div class="row mx-0">
                  <!-- col -->
                  <div class="col-xl-5 col-lg-12 col-md-5 text-center px-0">
                    <!-- left side -->
                    <div class="left_side h-100">
                      <!-- icon -->
                      <img src="{{ asset('images/svg_icons/automation_2.svg') }}" class="left_side_icon mb-1 img-fluid" alt="icon">
                      <!-- subtitle -->
                      <p class="card_sub_title mb-0">Историјски архив града Новог Сада</p>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-xl-7 col-lg-12 col-md-7 px-0">
                    <!-- right side -->
                    <div class="right_side h-100">
                      <!-- features -->
                      <ul class="card_features list-unstyled mb-0">
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Статут Архива</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Систематизација радних места</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Закон о јавним набавкама</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Неки други акт</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-12 px-0">
                    <!-- buttons -->
                    <div class="buttons">
                      <!-- action button -->
                      <a href="#" class="theme_primary_transparent_btn text-uppercase w-100">Преглед и употреба</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <!-- card -->
            <div class="theme_card">
              <!-- head -->
              <div class="card_head position-relative text-center">
                <!-- title -->
                <h5 class="card_title text-uppercase mb-0">Ostali akti</h5>
                <!-- icon -->
                <img src="{{ asset('images/svg_icons/productivity.svg') }}" class="card_icon position-absolute img-fluid" alt="icon">
              </div>
              <!-- body -->
              <div class="card_body d-flex">
                <!-- row -->
                <div class="row mx-0">
                  <!-- col -->
                  <div class="col-xl-5 col-lg-12 col-md-5 text-center px-0">
                    <!-- left side -->
                    <div class="left_side h-100">
                      <!-- icon -->
                      <img src="{{ asset('images/svg_icons/team.svg') }}" class="left_side_icon mb-1 img-fluid" alt="icon">
                      <!-- subtitle -->
                      <p class="card_sub_title mb-0">100% Worry-Free Nexus Server Management.</p>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-xl-7 col-lg-12 col-md-7 px-0">
                    <!-- right side -->
                    <div class="right_side h-100">
                      <!-- features -->
                      <ul class="card_features list-unstyled mb-0">
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Easy cPanel Control Panel</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Managed Hardware &amp; Network</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>24/7/365 Guru Crew Support</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Get Root Access On Core VPS</span>
                        </li>
                        <!-- item -->
                        <li class="d-flex align-items-center justify-content-md-start justify-content-center">
                          <i class="fa fa-check mr-1"></i>
                          <span>Managed Server Security</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-12 px-0">
                    <!-- buttons -->
                    <div class="buttons">
                      <!-- action button -->
                      <a href="#" class="theme_primary_transparent_btn text-uppercase w-100">Get Managed VPS</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SE V -->
  <div class="se_v py_80 text-md-left text-center" id="ele_5">
    <div class="container">
      <!-- section title -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Стручни радови<br>Објављени радови из архивске области</h3>
          </div>
          <!-- col -->
          <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <p class="sub_title mb-0">Here is a full breakdown of the three VPS management options available at Nexus providing a quick comparison of each level.</p>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="content">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-3" data-aos="zoom-in-left" data-aos-delay="100">
            <!-- item -->
            <div class="item">
              <!-- icon -->
              <div class="item_icon d-flex align-items-center justify-content-center mb-2 mx-md-0 mx-auto">
                <img src="{{ asset('images/svg_icons/rocket.svg') }}" class="img-fluid" alt="icon">
              </div>
              <!-- title -->
              <h5 class="item_title mb-1">Up To 20X Faster<br>Servers</h5>
              <!-- text -->
              <p class="item_text mb-0">Give your site a boost! Host on our fine-tuned, blazing fast Turbo Server option.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-3" data-aos="zoom-in-left" data-aos-delay="200">
            <!-- item -->
            <div class="item">
              <!-- icon -->
              <div class="item_icon d-flex align-items-center justify-content-center mb-2 mx-md-0 mx-auto">
                <img src="{{ asset('images/svg_icons/technical-support.svg') }}" class="img-fluid" alt="icon">
              </div>
              <!-- title -->
              <h5 class="item_title mb-1">24/7/365<br>Guru Crew</h5>
              <!-- text -->
              <p class="item_text mb-0">Our team of friendly support experts are here around the clock if you need help!</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6 mb-md-0 mb-3" data-aos="zoom-in-left" data-aos-delay="300">
            <!-- item -->
            <div class="item">
              <!-- icon -->
              <div class="item_icon d-flex align-items-center justify-content-center mb-2 mx-md-0 mx-auto">
                <img src="{{ asset('images/svg_icons/shield_2.svg') }}" class="img-fluid" alt="icon">
              </div>
              <!-- title -->
              <h5 class="item_title mb-1">Perpetual<br>Security</h5>
              <!-- text -->
              <p class="item_text mb-0">Processes and best practices in place to help keep your account safe!</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in-left" data-aos-delay="400">
            <!-- item -->
            <div class="item">
              <!-- icon -->
              <div class="item_icon d-flex align-items-center justify-content-center mb-2 mx-md-0 mx-auto">
                <img src="{{ asset('images/svg_icons/money-back.svg') }}" class="img-fluid" alt="icon">
              </div>
              <!-- title -->
              <h5 class="item_title mb-1">Anytime Money Back<br>Guarantee</h5>
              <!-- text -->
              <p class="item_text mb-0">Give our high speed hosting service a try completely risk free!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SE VI -->
  <div class="se_vi py_80 bg_2" id="ele_6">
    <div class="container">
      <!-- section title -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Стручни радови<br>Објављени радови из архивске области</h3>
          </div>
          <!-- col -->
          <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <p class="sub_title mb-0">Performance, easy-to-use features & the best development software are a few reasons why 97% of Nexus customers would recommend us to a friend, family or colleague. Are you ready to be the next happy VPS customer?</p>
          </div>
        </div>
      </div>
      <!-- conten -->
      <div class="content">
        <!-- slider container -->
        <div class="slider_container">
          <!-- slider -->
          <div class="slider mb-2" id="se_vi_slider">
            <!-- item -->
            <div class="item position-relative" data-aos="zoom-in-up" data-aos-delay="100">
              <!-- text -->
              <p class="item_text mb-3">I am an expert in web development and design. So far in the last couple of months I couldn't ask for better! Services are on spot, uptime is on spot! I have everything I need right where it is with a API.</p>
              <!-- user info -->
              <div class="user_info d-flex align-items-center">
                <!-- avatar -->
                <img src="{{ asset('images/users/01.jpeg') }}" class="item_avatar mr-1 img-fluid" alt="user">
                <!-- details -->
                <div class="details">
                  <!-- name & url -->
                  <a href="#" class="user_name d-inline-flex text-uppercase">Osama Bakri</a>
                  <!-- job -->
                  <p class="user_job mb-0">Web Developer</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item position-relative" data-aos="zoom-in-up" data-aos-delay="200">
              <!-- text -->
              <p class="item_text mb-3">I'v tested some other top VPS Providers/resellers (AWS, Digital Ocean, Vultr, etc.) and find that nexus.com offer highest performance/price ratio on market. One of the highest...</p>
              <!-- user info -->
              <div class="user_info d-flex align-items-center">
                <!-- avatar -->
                <img src="{{ asset('images/users/02.jpeg') }}" class="item_avatar mr-1 img-fluid" alt="user">
                <!-- details -->
                <div class="details">
                  <!-- name & url -->
                  <a href="#" class="user_name d-inline-flex text-uppercase">Hugh Nigel</a>
                  <!-- job -->
                  <p class="user_job mb-0">Backend Developer</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item position-relative" data-aos="zoom-in-up" data-aos-delay="300">
              <!-- text -->
              <p class="item_text mb-3">I am an expert in web development and design. So far in the last couple of months I couldn't ask for better! Services are on spot, uptime is on spot! I have everything I need right where it is with a API.</p>
              <!-- user info -->
              <div class="user_info d-flex align-items-center">
                <!-- avatar -->
                <img src="{{ asset('images/users/03.jpeg') }}" class="item_avatar mr-1 img-fluid" alt="user">
                <!-- details -->
                <div class="details">
                  <!-- name & url -->
                  <a href="#" class="user_name d-inline-flex text-uppercase">Gary Dave</a>
                  <!-- job -->
                  <p class="user_job mb-0">Software Engineer</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="item position-relative" data-aos="zoom-in-up" data-aos-delay="400">
              <!-- text -->
              <p class="item_text mb-3">I'v tested some other top VPS Providers/resellers (AWS, Digital Ocean, Vultr, etc.) and find that nexus.com offer highest performance/price ratio on market. One of the highest...</p>
              <!-- user info -->
              <div class="user_info d-flex align-items-center">
                <!-- avatar -->
                <img src="{{ asset('images/users/02.jpeg') }}" class="item_avatar mr-1 img-fluid" alt="user">
                <!-- details -->
                <div class="details">
                  <!-- name & url -->
                  <a href="#" class="user_name d-inline-flex text-uppercase">Hugh Nigel</a>
                  <!-- job -->
                  <p class="user_job mb-0">Backend Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- slider dots -->
          <div class="slider_dots" id="se_vi_slider_dots"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- SE VII -->
  <div class="se_vii py_80" id="ele_7">
    <div class="container">
      <!-- section title -->
      <div class="section_title">
        <!-- row -->
        <div class="row align-items-end">
          <!-- col -->
          <div class="col-xl-4 col-lg-5 mb-lg-0 mb-2" data-aos="zoom-in-right" data-aos-delay="100">
            <h3 class="title mb-0">Arhiv<br>Najcesca pitanja</h3>
          </div>
          <!-- col -->
          <div class="col-xl-7 col-lg-6 ml-auto" data-aos="zoom-in-right" data-aos-delay="200">
            <p class="sub_title mb-0">Frequently asked questions about our VPS plans.</p>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="content">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-6 pr-lg-3 pb-lg-5 mb-lg-0 mb-4" data-aos="zoom-in-up" data-aos-delay="100">
            <!-- box -->
            <div class="box">
              <h5 class="position-relative text-uppercase pl-4 mb-2">How are daily and hourly usage plans billed?</h5>
              <p class="position-relative pl-4 mb-0">Depending on the plan you choose, at the end of every month we generate an invoice based on the number of hours/days the services were used.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-6 pl-lg-3 pb-lg-5 mb-lg-0 mb-4" data-aos="zoom-in-up" data-aos-delay="200">
            <!-- box -->
            <div class="box">
              <h5 class="position-relative text-uppercase pl-4 mb-2">What's the best plan for me?</h5>
              <p class="position-relative pl-4 mb-0">If you’re a private or small organization and you’re not sure which plan to choose, we recommend you start with a small one. You can scale up at any time.</p>
            </div>
          </div>
        </div>
        <!-- buttons -->
        <div class="buttons d-flex align-items-center justify-content-center" data-aos="zoom-in-up" data-aos-delay="300">
          <a href="#" class="theme_primary_fill_btn text-uppercase">check for more FAQS</a>
        </div>
      </div>
    </div>
  </div>

  <!-- SIGN UP BAR -->
  <div class="sign_up_bar py_80 bg_2" id="ele_8">
    <div class="container">
      <!-- row -->
      <div class="row align-items-center">
        <!-- col -->
        <div class="col-12 text-center">
          <h1 class="text-uppercase mb-3" data-aos="zoom-in-up" data-aos-delay="100">Kontaktirajte nas</h1>
          <a href="#" class="theme_primary_fill_btn text-uppercase" data-aos="zoom-in-up" data-aos-delay="200">putem naseg e-maila</a>
        </div>
      </div>
    </div>
  </div>



@endsection
