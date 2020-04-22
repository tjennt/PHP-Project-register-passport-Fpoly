@extends('layout')

@section('noidung')
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/learn.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Hướng dẫn thủ tục</title>
    <base href="{{asset('')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">
</head>
{{-- <body>
    <!--header-->
    <!--header-->
    <header>

        <nav class="nav-display">
                <div class="boxcenter">
                <ul class="ul-display">
                    <li class="li1"><a href="#">TRANG CHỦ </a></li>
                    <li class="li2"><a href="#">CẤP HỘ CHIẾU</a></li>
                    <li class="lian"><a href="#">HƯỚNG DẪN THỦ TỤC</a>
                    </li>
                    <li class="li3"><a href="#">SỬA ĐỔI HỘ CHIẾU</a></li>
                    <li class="li4"><a href="#">TÌM KIẾM</a></li>
                    <li class="li5"><a href="#">LIÊN HỆ</a></li>
                    <li class="li6"><a href="#">ĐĂNG NHẬP</a></li>
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
                    <a href=""class="nav-link">TRANG CHỦ </a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">CẤP HỘ CHIẾU</a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">HƯỚNG DẪN THỦ TỤC</a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">SỬA ĐỔI HỘ CHIẾU</a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">TÌM KIẾM</a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                    <a href=""class="nav-link">ĐĂNG NHẬP</a>
                </li>
            </div>
        </div>
        <div class="boxtext-header">
            <h1 class="text-center">VƯƠNG ĐẾN TRỜI ÂU </h1>
        </div>
        <div class="bg"></div>
        </div>
        <script src="js/nav.js"></script>
</header> --}}
    <!--body-->
    <div class="container-fluid page1">
        <div class="container">
          <!--<h2 class="text-center">HƯỚNG DẪN THỦ TỤC</h2>-->
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-12 content" >
                    <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">CẤP HỘ CHIẾU PHỔ THÔNG</a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                              <div class="card card-body container-fluid">
                                <h4>1. Hồ sơ bao gồm:</h4>
                                <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</p>
                                <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                                <li>Giấy chứng minh nhân dân hoặc Thẻ căn cước công dân còn giá trị (xuất trình khi nộp hồ sơ để cơ quan Quản lý xuất nhập cảnh kiểm tra, đối chiếu).</li>
                                <li>Sổ tạm trú (nếu nộp hồ sơ tại nơi tạm trú).</li>
                                <h4>2. Lệ phí: 200.000 đ (Hai trăm nghìn đồng).</h4>

                            </div>
                            </div>
                </div>
              <div class="col-lg-4 col-sm-12 col-md-12 content">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">CẤP LẠI HỘ CHIẾU DO BỊ HƯ HỎNG, BỊ MẤT</a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                      <div class="card card-body container-fluid">
                        <h4>1. Hồ sơ bao gồm:</h4>
                        <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</li>
                        <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                        <li>Giấy chứng minh nhân dân hoặc Thẻ căn cước công dân còn giá trị (xuất trình khi nộp hồ sơ để cơ quan Quản lý xuất nhập cảnh kiểm tra, đối chiếu).</li>
                        <li>Hộ chiếu phổ thông còn giá trị.</li>
                        <h4>2. Lệ phí: 200.000 đ (Hai trăm nghìn đồng).</h4>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-12 content">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">CẤP LẠI HỘ CHIẾU DO HỘ CHIẾU CŨ </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                      <div class="card card-body container-fluid">
                        <h4>1. Hồ sơ bao gồm:</h4>
                        <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</li>
                        <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                        <li>Giấy chứng minh nhân dân hoặc Thẻ căn cước công dân còn giá trị (xuất trình khi nộp hồ sơ để cơ quan Quản lý xuất nhập cảnh kiểm tra, đối chiếu).</li>
                        <li>Sổ tạm trú (nếu nộp hồ sơ tại nơi tạm trú).</li>
                        <h4>2. Lệ phí: 200.000 đ (Hai trăm nghìn đồng).</h4>

                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 col-md-12 content">
                <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">CẤP CHUNG HỘ CHIẾU PHỔ THÔNG CHO TRẺ EM DƯỚI 9 TUỔI</a>
                    </p>
                    <div class="collapse" id="collapseExample4">
                      <div class="card card-body container-fluid">
                        <h4>1. Hồ sơ bao gồm:</h4>
                        <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</li>
                        <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                        <li>Giấy chứng minh nhân dân hoặc Thẻ căn cước công dân còn giá trị (xuất trình khi nộp hồ sơ để cơ quan Quản lý xuất nhập cảnh kiểm tra, đối chiếu).</li>
                        <li>Sổ tạm trú (nếu nộp hồ sơ tại nơi tạm trú).</li>
                        <h4>2. Lệ phí: 200.000 đ (Hai trăm nghìn đồng).</h4>
                      <h4>Hộ chiếu kèm 02 trẻ em: 300.000 đ (Ba trăm nghìn đồng).</h4>                              </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-12 content">
                <a class="btn btn-primary  " data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">CẤP CHUNG HỘ CHIẾU PHỔ THÔNG  CHO TRẺ EM DƯỚI 14 TUỔI</a>
                    </p>
                    <div class="collapse" id="collapseExample5">
                      <div class="card card-body container-fluid">
                        <h4>1. Hồ sơ bao gồm:</h4>
                        <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</li>
                        <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                        <li>Bản sao Giấy khai sinh (khi đến nộp xuất trình bản chính để đối chiếu).</li>
                        <li>Sổ tạm trú (nếu nộp hồ sơ tại nơi tạm trú).</li>
                        <h4>2. Lệ phí: 200.000 đ (Hai trăm nghìn đồng).</h4>                              </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-12 content">
                <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">SỬA ĐỔI, BỔ SUNG THÔNG TIN TRONG HỘ CHIẾU</a>

                    <div class="collapse" id="collapseExample6">
                      <div class="card card-body container-fluid">
                        <h4>1. Hồ sơ bao gồm:</h4>
                        <li> Khai 01 tờ khai đề nghị cấp hộ chiếu theo mẫu quy định (X01).</li>
                        <li>02 ảnh cỡ 4x6, nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu (chụp ảnh tại cơ sở chụp ảnh được cơ quan Quản lý xuất nhập cảnh cho phép).</li>
                        <li>Giấy chứng minh nhân dân hoặc Thẻ căn cước công dân còn giá trị (xuất trình khi nộp hồ sơ để cơ quan Quản lý xuất nhập cảnh kiểm tra, đối chiếu).</li>
                        <li>Sổ tạm trú (nếu nộp hồ sơ tại nơi tạm trú).</li>
                        <h4>Lệ phí: 50.000 đ (Năm mươi nghìn đồng).</h4>                              </div>
                    </div>
              </div>
            </div>
            </div>
        </div>
    <div class="container-fluid page2" style="display: block !important">
      <div class="container">
        <h2 class="text-center">NƠI NỘP HỒ SƠ & TRÌNH TỰ THỰC HIỆN ĐỀ NGHĨ CẤP HỘ CHIẾU </h2>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 content1">
            <h3 class="text-center">Nơi Nộp hồ sơ</h3>
            <p>Người đề nghị cấp hộ chiếu lần đầu, đề nghị cấp lại hộ chiếu do hết hạn trực tiếp nộp hồ sơ tại Phòng Quản lý xuất nhập cảnh Công an tỉnh, thành phố trực thuộc Trung ương nơi thường trú hoặc tạm trú.</p>
            <p>Người đề nghị cấp hộ chiếu do sắp hết hạn, do hư hỏng hoặc bị mất, đề nghị sửa đổi, bổ sung hộ chiếu nộp hồ sơ tại Phòng Quản lý xuất nhập cảnh Công an tỉnh, thành phố trực thuộc Trung ương nơi thường trú, tạm trú hoặc Cục Quản lý xuất nhập cảnh, Bộ Công an.</p>

          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 content2">
            <h3 class="text-center">Trình tự thực hiện cấp hộ chiếu</h3>
              <span>Bước 1: </span><p>Nhập đầy đủ thông tin tờ khai đề nghị cấp hộ chiếu.</p>
              <span>Bước 2: </span><p>In tờ khai đề nghị cấp hộ chiếu (tại nhà hoặc tại nơi nộp hồ sơ).</p>
              <span>Bước 3: </span><p>Đặt lịch hẹn nộp hồ sơ (nếu có nhu cầu).</p>
              <span>Bước 4: </span><p>Đến nộp hồ sơ tại cơ quan Quản lý xuất nhập cảnh.</p>
          </div>
          {{-- <div class="col-lg-12 col-md-12 col-sm-12 text-center button">
            <button class="btn ml-2 btn-primary " style="padding: 10px 20px; font-size: 1.1em;">Quay Lại</button>
            <button class="btn ml-2 btn-primary " style="padding: 10px 20px;font-size: 1.1em;">Khai thông tin tờ khai đề nghị cấp hộ chiếu</button>
          </div> --}}
        </div>
      </div>
    </div>
    @endsection
{{-- </body>
</html> --}}
