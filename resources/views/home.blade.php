
  <!DOCTYPE html-delete>
  <html-delete lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Đăng Ký Passport</title>

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

      <link rel="stylesheet" href="{{asset('tool/css/open-iconic-bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/animate.css')}}">

      <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">

      <link rel="stylesheet" href="{{asset('tool/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/magnific-popup.css')}}">

      <link rel="stylesheet" href="{{asset('tool/css/aos.css')}}">

      <link rel="stylesheet" href="{{asset('tool/css/ionicons.min.css')}}">

      <link rel="stylesheet" href="{{asset('tool/css/bootstrap-datepicker.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/jquery.timepicker.css')}}">


      <link rel="stylesheet" href="{{asset('tool/css/flaticon.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/icomoon.css')}}">
      <link rel="stylesheet" href="{{asset('tool/css/style.css')}}">
      <script src="{{asset('tool/js/jquery.js')}}"></script>

      <link rel="stylesheet" href="{{asset('tool/css/fontawesome-free-5.12.0-web/css/all.css')}}">



    <base href="{{asset('')}}">
    </head>
    <body>
    <script>
    @if(session('danger10'))
    $(window).on('load', function () {
         
                alert('{{session('danger10')}}');
    
        
    });
    @endif
    
    @if(session('success'))
    $(window).on('load', function () {
         
                alert('{{session('success')}}');
    
        
    });
    @endif
    
</script>
    <div class="loader">
        <div class="spinner">
          <div class="double-bounce1">
          </div>
          <div class="double-bounce2">
          </div>
        </div>
    </div>
       <script>
          $(window).on('load', function(){
            $('.loader').fadeOut(1100);
        });
      </script>

<header @if (Request::route()->uri == "contact" || Request::route()->uri == "search-passport" || Request::route()->uri == "note")
    style="height: 50vh"
        @endif>
    <nav class="nav-display">

        <div class="container">
            <a class="text-logo" href="/">Pro<span>Cute</span></a>
            <ul class="ul-display">

                <li class="li1"><a href="/">Trang chủ </a></li>

                <li class="li2"><a href="home/signup-resident">Đăng ký</a></li>

                <li class="lian"><a href="note">Hướng dẫn thủ tục</a></li>

                <li class="li4"><a href="search-passport">Tra cứu</a></li>

                <li class="li5"><a href="contact">Liên hệ</a></li>

            </ul>

        </div>

    </nav>


    <div class="navbar">



        <div class="hamburger-menu">

            <div class="line line-1"></div>

            <div class="line line-2"></div>

            <div class="line line-3"></div>

        </div>

        <div class="nav-list">

            <li class="nav-item">

                <a href="home"class="nav-link">Trang chủ </a>

            </li>

            <li class="nav-item">

                <a href="home/signup-resident"class="nav-link">Đăng ký</a>

            </li>

            <li class="nav-item">

                <a href="note"class="nav-link">Hướng dẫn thủ tục</a>

            </li>

            <li class="nav-item">

                <a href="search-passport"class="nav-link">Tra cứu</a>

            </li>

            <li class="nav-item">

                <a href="contact"class="nav-link">Liên hệ</a>

            </li>

        </div>

    </div>

    <a class="text-logo-res" href="/">Pro<span>Cute</span></a>


<script src="{{asset('js/nav.js')}}"></script>

</header>

      {{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container menu-neo">
          <a class="navbar-brand" href="/">Pro<span>Cute</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="/" class="nav-link">Trang chủ</a></li>
              <li class="nav-item"><a href="/home/signup-resident" class="nav-link">Đăng ký</a></li>
              <li class="nav-item"><a href="/note" class="nav-link">Hướng dẫn thủ tục</a></li>
              <li class="nav-item"><a href="/search-passport" class="nav-link">Tra cứu</a></li>
              <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
            </ul>
          </div>
        </div>
      </nav> --}}
      <!-- END nav -->

      <div class="hero-wrap" style="background-image: url('{{asset('tool/images/banner.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-9 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-shadow: 0 0 3px black">Vương đến trời Âu</h1>
              <div class="justify-content-center d-flex">
                <p><a href="/home/signup-resident" class="btn btn-neo py-3 px-4">Đăng ký Passport</a></p>
              </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
              <div class="play-video pb-5 d-flex align-items-center">
                <p><a href="https://www.youtube.com/watch?v=_YS2ZAlTkM0"   class="popup-vimeo"><span class="icon"><i class="ion-ios-play "></i></span> <span class="play">Video hướng dẫn</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="ftco-section ftco-no-pt ftco-no-pb ftco-volunteer" style="background: white;">
        <div class="container">
          <div class="row">
            <div class="col-md-7 img-volunteer" style="background-image: linear-gradient(to right,#00000013, #0000005b), url('{{asset('tool/images/hinh1.png')}}'); ">
              <div class="row no-gutters justify-content-end">
                <div class="col-lg-7">
                  <div class="text py-5 pl-md-4 pr-md-3">
                    <h2 class="mb-4">TÌM HIỂU PASSPORT</h2>
                    <p class="text-justify">Giấy chứng nhận do chính phủ cấp (Ở đây là Việt Nam ) để công dân nước đó có quyền xuất cảnh đi nước khác và nhập cảnh trở về nước mình.</p>
                    <p><a href="https://vi.wikipedia.org/wiki/H%E1%BB%99_chi%E1%BA%BFu" class="btn btn-primary py-3 px-4">Tìm hiểu thêm <i class="icon-angle-double-right"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-flex align-items-center img-volunteer2  " style="background-image: linear-gradient(to right,#0000005b, #0000005b), url('{{asset('tool/images/hinh3.png')}}'); background-blend-mode:normal;">
              <div class="about-text py-5 pl-md-5">
                <h3>THỐNG KÊ TỔNG SỐ HỘ CHIẾU ĐƯỢC CẤP:  <strong class="number" data-number="{{$co}}">0</strong></h3>
                <p>Số lượng Hộ chiếu được cấp tính theo từng năm. Phân theo giới tính, độ tuổi, nghề nghiệp.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="services-section py-5 py-md-0 bg-light">
        <div class="container pt-5">
          <div class="text-center pt-3">
            <h2>Phân loại Hộ chiếu</h2>
          </div>
          <div class="row no-gutters d-flex">
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services active d-block">
                <div class="icon"><i class="fab fa-battle-net"></i> </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Loại Phổ Thông:</h3>
                  <p>	 Được cấp cho công dân Việt Nam,du học sinh, có thời hạn là 10 năm kể từ ngày cấp.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block">
                <div class="icon"><i class="fab fa-firefox"></i> </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Hộ chiếu nội vụ</h3>
                  <p>Được cho phép cho các cá nhân trong cơ quan chính phủ nhà nước đi công vụ nước ngoài.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services  d-block">
                <div class="icon"><i class="fab fa-unity"></i></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Hộ chiếu ngoại giao</h3>
                  <p>Được cấp phép cho các cá nhân trong cơ quan ngoại giao của chính phủ công tác ở nước ngoài.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="ftco-section ftco-causes">
        <div class="container">
          <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate">
              <h2 class="mb-4">QUY ĐỊNH THỜI HẠN HỘ CHIẾU</h2>
              <p>Đây là những quy định cơ bản được liệt kê, ngoài ra còn có nhiều quy định khác cần tìm hiểu.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row ftco-animate">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <ul>
                      <li>Công dân thuộc tường hợp chưa được xuất cảnh nhưng được Bộ trưởng Bộ Công an quyết định cho xuất cảnh.</li>
                      <li>Trẻ em từ 9 tuổi đén dưới 14 tuổi.</li>
                      <li>Hộ chiếu cấp chung cho công dân Việt Nam và con dưới 9 tuổi.</li>
                      <h5 class="pt-4">Ngoài ra,công dân bổ dung con dưới 9 tuổi vào hộ chiếu của mình thì thời hạn sau bổ sung như sau:</h5>
                      <li>Hộ chiếu còn thời hạn không quá 5 năm thì giữ nguyên.</li>
                      <li>Hộ chiếu còn thời hạn trên 5 năm thì điều chỉnh xuống còn 5 năm.</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                      <img class=" img-responsive" width= " 100%" src="{{asset('tool/images/hinh2.png')}}" alt="">
                  </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <footer class="ftco-footer ftco-section">
        <p class="text-center " style="font-size: 15pt; color:#caa234">Bản quyền © 2017 Cục Quản lý xuất nhập cảnh - Bộ Công an</p>
        <p class="text-center"  style="font-size: 15pt; color:#caa234">Địa chỉ: Số 44-46 Trần Phú, Ba Đình, Hà Nội. ĐT: 04 3825 7941, Fax: 04 3824 3287, Email: vnimm@hn.vnn.vn</p>

    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('tool/js/jquery.min.js')}}"></script>
    <script src="{{asset('tool/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('tool/js/popper.min.js')}}"></script>
    <script src="{{asset('tool/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tool/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('tool/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('tool/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('tool/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('tool/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('tool/js/aos.js')}}"></script>
    <script src="{{asset('tool/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('tool/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('tool/js/google-map.js')}}"></script>
    <script src="{{asset('tool/js/main.js')}}"></script>

    </body>
  </html-delete>
