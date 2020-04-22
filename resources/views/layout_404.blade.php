<!DOCTYPE html>

<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/form.css')}}">

    <script src="{{asset('js/jquery.js')}}"></script>

    <script src="{{asset('js/demo.js')}}"></script>

    <title>Đăng kí hộ chiếu</title>

    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">

    <script src="{{asset('js/style.js')}}"></script>

    <script src="{{asset('js/wow.js')}}"></script>

    <script>

    new WOW().init();

    </script>

    <!-- Tải về thư viện jquery để load nhanh hơn -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>

    <base href="{{asset('')}}">

    <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">

</head>

<body>

    <!--header-->
<!--Loader-->
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
            $('.loader').fadeOut(2200);
        });
      </script>
    <header style="height: 30vh">
        <nav class="nav-display">

            <div class="container">
                <a class="text-logo" href="/">Pro<span>Cute</span></a>
                <ul class="ul-display">

                    <li class="li1"><a href="/">Trang chủ </a></li>

                    <li class="li2"><a href="home/signup-resident">Đăng ký</a></li>

                    <li class="lian"><a href="note">Hướng dẫn thủ tục</a>

                    </li>

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

        <div class="boxtext-header">

            <h1 class="text-center">ERORR 404</h1>

        </div>

        <div class="bg"></div>




    <a class="text-logo-res" href="/">Pro<span>Cute</span></a>

            <script src="{{asset('js/nav.js')}}"></script>

    </header>

    <!-- Section -->

    @yield('erorr')

    <!-- End Section -->

    <footer class="ftco-footer ftco-section">
        <p class="text-center " style="font-size: 15pt; color:#caa234">Bản quyền © 2017 Cục Quản lý xuất nhập cảnh - Bộ Công an</p>
        <p class="text-center"  style="font-size: 15pt; color:#caa234">Địa chỉ: Số 44-46 Trần Phú, Ba Đình, Hà Nội. ĐT: 04 3825 7941, Fax: 04 3824 3287, Email: vnimm@hn.vnn.vn</p>

    </footer>

</body>

</html>
