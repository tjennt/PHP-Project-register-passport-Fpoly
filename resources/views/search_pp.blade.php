@extends('layout')

@section('noidung')
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/search.css">
    <script src="js/jquery.js"></script>
    <title>Tra cứu</title>
    <base href="{{asset('')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">
</head>
<body>
    <!--header-->
    <!--end header-->
    <!--body-->
        <div class="container-fluid page " style="padding: 3vh">
            <div class="container">
                <!--<h2 class="text-center" style="font-weight:bold">TRA CỨU TÌNH TRẠNG KẾT QUẢ HỘ CHIẾU</h2>-->
                    @if(session('success_s'))
                        <p class="alert alert-info" style="font-size: 16pt">{{session('success_s')}}</p>
                    @endif
                    @if(session('danger'))
                        <p class="alert alert-info" style="color: red; font-size: 16pt">{{session('danger')}}</p>
                    @endif


                    <form method="post">
                        @csrf

                            <div class="col-lg-12 col-sm-12 input-fi">
                                <div class="form-group">
                                    <label for="">Nhập Số CMND/CCCD:</label>
                                    <input type="text" class="form-control" style="height: 50px;font-size: 1.2em;" name="scmnd" pattern="[0-9]{6,}" required id="" aria-describedby="helpId" placeholder="Vui lòng nhập chứng minh nhân dân hoặc thẻ căn cước"  pattern="^\d{9}$" title="Định dạng bao gồm 9 chữ số " required >
                                </div>
                                <div class="col-lg-12 col-sm-12 input-submit">
                                    <button type="submit" name="" id="" class="click  " >TRA CỨU</button>
                                </div>
                            </div>

                    </form>

            </div>
        </div>
    <!--end body-->
    <!--footer-->
    @endsection
