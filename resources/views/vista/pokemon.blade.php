<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>PokeApi</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <a class="brand" href="index.html"></a>
                  </div>
                </div>
                <!----><div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('inicio')}}">Inicio</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('getApi')}}">PokeApi</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/pokemon1.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/pokemon2.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/pokemon3.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
      <!--Separcion-->
      <div class="lugar1">
          <h1>PokeApi</h1>
          <hr>
        </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>