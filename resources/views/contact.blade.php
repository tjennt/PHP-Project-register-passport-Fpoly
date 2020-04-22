@extends('layout')

@section('noidung')
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Liên Hệ</title>
    <base href="{{asset('')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">
</head>
    <!--body-->
    <div class="container-fluid" style="margin-bottom:20px; padding: 3vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  box-fi">
                    <h3>Trụ sở tại Hà Nội</h3>
                    <li> Địa chỉ: 44-46 đường Trần Phú, quận Ba Đình, Hà Nội </li>
                    <li> Điện thoại: 0438257941</li>
                    <li> Fax: 0438243287, 0438243288</li>
                    <li>Số điện thoại giải đáp thủ tục xuất nhập cảnh của công dân Việt Nam: 0438260922</li>
                    <li>Số điện thoại giải đáp thủ tục nhập xuất cảnh của người nước ngoài: 0438264026</li>
                </div>
                <div class="col-lg-6  img">
                        <img src="images/4G4A0823_HDR.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-6  img">
                        <img src="images/kinh-nghiem-du-lich-sai-gon-00.jpg" class="img-fluid" alt="Responsive image">

                </div>
                <div class="col-lg-6  box-sec">
                    <h3>Trụ sở tại TP Hồ Chí Minh</h3>
                    <li> Địa chỉ: 333-335-337 đường Nguyễn Trãi, Q1, TP. Hồ Chí Minh </li>
                    <li>Điện thoại: 0839202300</li>
                    <li> Fax: 0438243287, 0438243288</li>
                    <li>Số điện thoại giải đáp thủ tục xuất nhập cảnh của công dân Việt Nam: 0839201701</li>
                    <li>Số điện thoại giải đáp thủ tục nhập xuất cảnh của người nước ngoài: 039200365</li>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-6  box-thr">
                    <h3>Khu vực Miền Trung và Tây Nguyên</h3>
                    <li> Địa chỉ: Số 7, đường Trần Quý Cáp, quận Hải Châu, TP. Đà Nẵng </li>
                    <li>Điện thoại: 02363822381</li>
                    <li>Fax: 02363826670</li>
                    <li> Số điện thoại giải đáp thủ tục xuất nhập cảnh của công dân Việt Nam: 0694260354</li>
                    <li>Số điện thoại giải đáp thủ tục nhập xuất cảnh của người nước ngoài: 0694260349</li>
                </div>
                <div class="col-lg-6  img">
                    <img src="images/111111.jpg" class="img-fluid" alt="Responsive image" title="Đà Nẵng">
                </div>
            </div>
        </div>
    </div>
    <!--end body-->
    @endsection
