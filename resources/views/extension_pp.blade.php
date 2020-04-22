<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/search.css">
    <script src="js/jquery.js"></script>
    <title>Tra cứu</title>
    <base href="{{asset('')}}">
</head>
<body>
     @if(session('wrong'))
    $(window).on('load', function () {
         
                alert('{{session('wrong')}}');
    
        
    });
    @endif
    <!--header-->
    <header>

        <nav class="nav-display">
                <div class="boxcenter">
                <ul class="ul-display">
                        <li class="li1"><a href="home">TRANG CHỦ </a></li>
                        <li class="li2"><a href="home/signup-resident">CẤP HỘ CHIẾU</a></li>
                        <li class="lian"><a href="#">HƯỚNG DẪN THỦ TỤC</a>
                        </li>
                        <li class="li4"><a href="search-passport">KIỂM TRA THÔNG TIN PASSPORT</a></li>
                        <li class="li5"><a href="#">LIÊN HỆ</a></li>
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
                            <a href="home"class="nav-link">TRANG CHỦ </a>
                        </li>
                        <li class="nav-item">
                            <a href="home/signup-resident"class="nav-link">CẤP HỘ CHIẾU</a>
                        </li>
                        <li class="nav-item">
                            <a href="note"class="nav-link">HƯỚNG DẪN THỦ TỤC</a>
                        </li>
                        <li class="nav-item">
                            <a href="search-passport"class="nav-link">KIỂM TRA THÔNG TIN PASSPORT</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact"class="nav-link">LIÊN HỆ</a>
                        </li>
            </div>
        </div>
        <div class="boxtext-header">
            <h1 class="text-center">GIA HẠN PASSPORT </h1>
        </div>
        {{-- <div class="bg"></div> --}}
        </div>
        <script src="js/nav.js"></script>
    </header>
    <!--end header-->
    <!--body-->
        <div class="container-fluid page">
            <div class="container">
                <h2 class="text-center" style="font-weight:bold">TRA CỨU THỜI HẠN HỘ CHIẾU</h2>
                <h5 class="text-center">Nhập đầy đủ các thông tin dưới đây để tra cứu</h5><br>
                    @if(session('success'))
                        <p class="alert alert-info" style="font-size: 16pt">{{session('success')}}</p>
                    @endif
                    @if(session('danger'))
                        <p class="alert alert-info" style="color: red; font-size: 16pt">{{session('danger')}}</p>
                    @endif
                <br>
                <div class="row">
                    <form method="post">
                        @csrf
                        <div class="col-lg-12 col-sm-12 input-fi">
                            <div class="form-group">
                              <label for="">Nhập Số CMND/CCCD:</label>
                              <input type="text" class="form-control" name="cmnd" id="" aria-describedby="helpId" placeholder="Vui lòng nhập chứng minh nhân dân hoặc thẻ căn cước ">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 input-submit">
                            <div class="container">
                                <input type="submit" name="" id="" class="click" value="TRA CỨU">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--end body-->
    <!--footer-->
    <footer>
            <h2 class="text-center" style="font-size: 15pt;">Bản quyền © 2017 Cục Quản lý xuất nhập cảnh - Bộ Công an</h2>
            <h2 class="text-center"  style="font-size: 15pt;">Địa chỉ: Số 44-46 Trần Phú, Ba Đình, Hà Nội. ĐT: 04 3825 7941, Fax: 04 3824 3287, Email: vnimm@hn.vnn.vn</h2>       
    </footer>
    <script>
    
    </script>
</body>
</html>