<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <!-- my CSS -->
    {{-- <link rel="stylesheet" href="admin_css/css/myCSS.css"> --}}
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="admin_css/css/bootstrap-grid.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="admin_css/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="admin_css/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="admin_css/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="admin_css/css/bootstrap.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap.css.map">
    <link rel="stylesheet" href="admin_css/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_css/css/bootstrap.min.css.map"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <base href="{{asset('')}}">
  <meta name="_token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">
</head>
  <body>
        <!-- Header  -->
            <div class="container">
                <section>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
                        <span class="navbar-brand"><img src="admin_css/images/logo.png" width="50px" alt=""></span>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                @if(Auth::guard('admin')->user()->level == 0)
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin/show-xt">Xét thực <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="admin/log-xt">Danh sách đã xác thực <span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif(Auth::guard('admin')->user()->level == 1)
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin/show-xd">Xét duyệt <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="admin/log-xd">Danh sách đã xét duyệt <span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif(Auth::guard('admin')->user()->level == 2)
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin/show-lt">Lưu trữ <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="admin/log-lt">Danh sách đã lưu trữ <span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif(Auth::guard('admin')->user()->level == 3)
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin/show-gs">Danh sách Hồ sơ <span class="sr-only">(current)</span></a>
                                </li>
                                @else
                                <li class="nav-item active">
                                        <a class="nav-link" href="admin/show-xt">Xét thực <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                            <a class="nav-link" href="admin/show-xd">Xét duyệt <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item active">
                                                <a class="nav-link" href="admin/show-lt">Lưu trữ <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item active">
                                                    <a class="nav-link" href="admin/show-gs">Danh sách Hồ sơ <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item active">
                                                        <a class="nav-link" href="admin/signup-admin">Thêm admin <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="admin/home">Danh sách Admin <span class="sr-only">(current)</span></a>
                                                    </li>
                                @endif
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    @if(session('admin'))
                                        Tài khoản: <span class="font-weight-bold"> {{session('admin')}}</span>
                                        {{-- <a class="btn btn-link"  href="home">Chi tiết</a> --}}
                                        <a class="btn btn-outline-danger"  href="home/logout">Logout</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                </section>
            </div>
        <!-- End Header  -->

        <!-- body -->

           @yield('noidung2')

        <!-- footer -->
        <section class="mb-5"></section>

        <!-- end footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="admin_css/js/bootstrap.bundle.js" crossorigin="anonymous"></script> --}}
    <script src="admin_css/js/bootstrap.bundle.js.map" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.bundle.min.js.map" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.js.map" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="admin_css/js/bootstrap.min.js.map" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>
</html>
