
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Nifty Theme | Osama Bakri">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="keywords" content="Nexus, multipurpose, hosting, domain, vps, server, servers">
  <meta name="theme-color" content="#29c7ac">
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/slick.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme/index.css') }}">
  <!-- title -->
  <title>Архив Нови Сад</title>
  <style>
    .page-link{
      color: #00657b;
      text-align:center;
  }
    .page-item.active .page-link{
      background-color: #00657b;
      border-color: #00657b;
    }
    .category-list{
      padding: 0;
      margin: 0;
    }
    .category-list li{
      list-style: none;
    }
    .category-title{
      margin-top: 30px;
      margin-bottom: 10px;
    }
    .post-category a{
      text-decoration: none;
    }
    .btna {
background-color: DodgerBlue;
border: none;
color: white;
padding: 6px 8px;
font-size: 12px;
cursor: pointer;
}

/* Darker background on mouse-over */
.btna:hover {
background-color: RoyalBlue;
}
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="theme_navbar position-relative">
    <div class="container">
      <!-- content -->
      <div class="navbar_content d-flex align-items-center justify-content-between position-relative">
        <!-- logo -->
        <a href="#" class="theme_logo order-lg-1 order-3 d-inline-flex align-items-center justify-content-center">
          <img src="{{ asset('images/media/logo_01.png') }}" class="img-fluid" alt="Nexus">
        </a>
        <!-- links -->
        <ul class="navbar_links list-unstyled order-2 mb-0 d-lg-flex align-items-center text-uppercase">
          <!-- link -->
          <li class="navbar_link">
            <a href="{{ route('index') }}" class="d-block">архив</a>
          </li>
          <!-- link -->
          <li class="navbar_link">
            <a href="#" class="d-block">блог</a>
          </li>
          <!-- link -->
          <li class="navbar_link">
            <a href="#" class="d-block">фондови</a>
          </li>
          <!-- link -->
          <li class="navbar_link">
            <a href="#" class="d-block">контакт</a>
          </li>
          <!-- link -->
          <li class="navbar_link">
            <a href="#" class="d-block">регистрација</a>
          </li>
          <!-- link -->
          <li class="navbar_link">
            <a href="{{ route('login') }}" class="d-block">приступ</a>
          </li>
        </ul>
        <!-- toggler -->
        <button class="navbar_toggler order-lg-3 order-1 d-lg-none d-inline-flex flex-column align-items-start justify-content-between" id="navbar_toggler">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </nav>
@yield('content')


  <!-- FOOTER -->
  <footer  id="ele_9">
    <div class="container">
      <!-- row -->

      <!-- copyright -->
      <div class="copyright pt-3" data-aos="fade-in" data-aos-delay="100">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-6 mb-lg-0 mb-1">
            <p class="mb-0">Copyright 2020 <a href="#">Nifty Theme</a>. All rights reserved.</p>
          </div>
          <!-- col -->
          <div class="col-lg-6">
            <!-- links -->
            <ul class="links list-unstyled d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap mb-0">
              <!-- link -->
              <li class="link mr-2"><a href="#">Privacy policy</a></li>
              <!-- link -->
              <li class="link mr-2"><a href="#">Terms &amp; Conditions</a></li>
              <!-- link -->
              <li class="link mr-2"><a href="#">Sitemap</a></li>
              <!-- link -->
              <li class="link"><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/vendors/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/vendors/popper.js') }}"></script>
  <script src="{{ asset('js/vendors/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/vendors/slick.min.js') }}"></script>
  <script src="{{ asset('js/vendors/aos.js') }}"></script>
  <script src="{{ asset('js/theme/script.js') }}"></script>
</body>
</html>
