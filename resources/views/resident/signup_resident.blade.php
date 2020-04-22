
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/form.css')}}">
        <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/demo.j')}}s"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Đăng kí hộ chiếu</title>
        <base href="{{asset('')}}">
</head>
<body>
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
        <header>
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
                    <h1 class="text-center">ĐĂNG KÍ HỘ CHIẾU</h1>
                </div>

                <div class="bg"></div>

    <a class="text-logo-res" href="/">Pro<span>Cute</span></a>

                <script src="{{asset('js/nav.js')}}"></script>

        </header>
        <!--Done header-->
        <div class="container-fluid book">

                        <form method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                <div class="container ">
                    <div class="row page1"id="type1">
                        <div class="col-lg-8 col-sm-12 col-md-12 name">
                                <div class="form-group">
                                        <div class="form-group">
                                                <label for="">1. Nhập Họ và Tên:</label>
                                                <input type="text" class="form-control" onblur="check()"  name="username" id="username" aria-describedby="helpId"  pattern="(?:[A-Z][a-z]*.{0,2}[a-z]*\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)" title="phải nhập chữ  hoa đầu câu" required   placeholder="Vui lòng nhập họ và tên">
                                                <p id="demo"></p>
                                             </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 gender">
                            <div class="form-group">
                                <label for="input" class="control-label">2. Giới tính:</label>
                                <div class="" >
                                    <select name="gioitinh" id="gender" class="form-control">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8 col-sm-12 col-md-12 datebirth">
                                <div class="form-group">
                                        <div class="form-group">
                                                <label for="">3. Ngày sinh:</label>
                                                <input type="date" class="form-control" name="ngaysinh" id="datepicker1" aria-describedby="helpId" placeholder="Vui lòng nhập họ và tên">
                                             </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 wherebirth">
                                <div class="form-group">
                                        <label for="input" class="control-label">4. Nơi Sinh:</label>
                                        <div class="">
                                            <select name="noisinh" id="wherebirth" class="form-control">
                                                     <option value="Cần Thơ">Cần Thơ</option>
                                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                                        <option value="Hải Phòng">Hải Phòng</option>
                                                        <option value="Hà Nội">Hà Nội</option>
                                                        <option value="TP HCM">TP HCM</option>
                                                        <option value="An Giang"> An Giang</option>
                                                        <option value="Bà Rịa – Vũng Tàu">Bà Rịa – Vũng Tàu</option>
                                                        <option value="Bắc Giang">Bắc Giang</option>
                                                        <option value="Bắc Kạn">Bắc Kạn</option>
                                                        <option value="Bắc Ninh">Bắc Ninh</option>
                                                        <option value="Bến Tre">Bến Tre</option>
                                                        <option value="Bình Định">Bình Định</option>
                                                        <option value="Bình Dương"> Bình Dương</option>
                                                        <option value="Bình Phước">Bình Phước</option>
                                                        <option value="Bình Thuận"> Bình Thuận</option>
                                                        <option value="Cà Mau">Cà Mau</option>
                                                        <option value="Cần Thơ">    Cần Thơ</option>
                                                        <option value="Cao Bằng">Cao Bằng</option>
                                                        <option value="Đà Nẵng">    Đà Nẵng</option>
                                                        <option value="Đắk Lắk">    Đắk Lắk</option>
                                                        <option value="Đắk Nông">   Đắk Nông</option>
                                                        <option value="Điện Biên">Điện Biên</option>
                                                        <option value="Đồng Na">    Đồng Nai</option>
                                                        <option value="Khánh Hòa">Khánh Hòa</option>
                                                        <option value="Kiên Giang">Kiên Giang</option>
                                                        <option value="Yên Bái<">Yên Bái</option>
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                        <option value="Vĩnh Long">  Vĩnh Long</option>
                                                        <option value="Trà Vinh">Trà Vinh</option>
                                                        <option value="Tiền Giang">Tiền Giang</option>
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                                        <option value="Thái Nguyên">Thái Nguyên</option>
                                                        <option value="Thái Bình">Thái Bình</option>

                                                        <option value="Tây Ninh">Tây Ninh</option>
                                                        <option value="Sơn La">Sơn La</option>
                                                        <option value="Sóc Trăng">  Sóc Trăng</option>
                                                        <option value="Quảng Trị">Quảng Trị</option>
                                                        <option value="Quảng Ninh">Quảng Ninh</option>
                                                        <option value="Quảng Ngãi">Quảng Ngãi</option>

                                                        <option value="Quảng Nam">Quảng Nam</option>
                                                        <option value="Phú Yên">    Phú Yên</option>
                                                        <option value="Phú Thọ">Phú Thọ</option>
                                                        <option value="Ninh Thuận">Ninh Thuận</option>
                                                        <option value="Ninh Bình">Ninh Bình</option>
                                                        <option value="Nghệ An">Nghệ An</option>

                                                        <option value="Nam Định">Nam Định</option>
                                                        <option value="Long An">Long An</option>
                                                        <option value="Lào Cai">Lào Cai</option>
                                                        <option value="Lạng Sơn">Lạng Sơn</option>
                                                        <option value="Lâm Đồng">Lâm Đồng</option>
                                                        <option value="Lai Châu">Lai Châu</option>
                                            </select>
                                        </div>
                                    </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-md-12 identity">
                                <div class="form-group">
                                        <div class="form-group">
                                                <label for="">5. Giấy CMND/TCCCD *:</label>
                                                <input type="text" class="form-control" onblur="checkcmnd()" name="cmnd" id="identity" aria-describedby="helpId" placeholder="Vui lòng nhập CMND/CCCD" pattern="^\d{9}$" title="Định dạng bao gồm 9 chữ số " required >
                                             </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 dateidentity">
                                <div class="form-group">
                                        <div class="form-group">
                                                <label for="">6. Ngày cấp:</label>
                                                <input type="date" class="form-control" name="ngaycap" id="datepicker2" aria-describedby="helpId" placeholder="Vui lòng nhập họ và tên">
                                             </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 whereidentity">
                                <div class="form-group">
                                        <label for="input" class="control-label">7. Nơi cấp:</label>
                                        <div class="">
                                            <select name="noicap" id="whereidentity" class="form-control">
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="TP HCM">TP HCM</option>
                                                <option value="An Giang"> An Giang</option>
                                                <option value="Bà Rịa – Vũng Tàu">Bà Rịa – Vũng Tàu</option>
                                                <option value="Bắc Giang">Bắc Giang</option>
                                                <option value="Bắc Kạn">Bắc Kạn</option>
                                                <option value="Bắc Ninh">Bắc Ninh</option>
                                                <option value="Bến Tre">Bến Tre</option>
                                                <option value="Bình Định">Bình Định</option>
                                                <option value="Bình Dương"> Bình Dương</option>
                                                <option value="Bình Phước">Bình Phước</option>
                                                <option value="Bình Thuận"> Bình Thuận</option>
                                                <option value="Cà Mau">Cà Mau</option>
                                                <option value="Cần Thơ">    Cần Thơ</option>
                                                <option value="Cao Bằng">Cao Bằng</option>
                                                <option value="Đà Nẵng">    Đà Nẵng</option>
                                                <option value="Đắk Lắk">    Đắk Lắk</option>
                                                <option value="Đắk Nông">   Đắk Nông</option>
                                                <option value="Điện Biên">Điện Biên</option>
                                                <option value="Đồng Na">    Đồng Nai</option>
                                                <option value="Khánh Hòa">Khánh Hòa</option>
                                                <option value="Kiên Giang">Kiên Giang</option>
                                                <option value="Yên Bái<">Yên Bái</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Vĩnh Long">  Vĩnh Long</option>
                                                <option value="Trà Vinh">Trà Vinh</option>
                                                <option value="Tiền Giang">Tiền Giang</option>
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                <option value="Thanh Hóa">Thanh Hóa</option>
                                                <option value="Thái Nguyên">Thái Nguyên</option>
                                                <option value="Thái Bình">Thái Bình</option>

                                                <option value="Tây Ninh">Tây Ninh</option>
                                                <option value="Sơn La">Sơn La</option>
                                                <option value="Sóc Trăng">  Sóc Trăng</option>
                                                <option value="Quảng Trị">Quảng Trị</option>
                                                <option value="Quảng Ninh">Quảng Ninh</option>
                                                <option value="Quảng Ngãi">Quảng Ngãi</option>

                                                <option value="Quảng Nam">Quảng Nam</option>
                                                <option value="Phú Yên">    Phú Yên</option>
                                                <option value="Phú Thọ">Phú Thọ</option>
                                                <option value="Ninh Thuận">Ninh Thuận</option>
                                                <option value="Ninh Bình">Ninh Bình</option>
                                                <option value="Nghệ An">Nghệ An</option>

                                                <option value="Nam Định">Nam Định</option>
                                                <option value="Long An">Long An</option>
                                                <option value="Lào Cai">Lào Cai</option>
                                                <option value="Lạng Sơn">Lạng Sơn</option>
                                                <option value="Lâm Đồng">Lâm Đồng</option>
                                                <option value="Lai Châu">Lai Châu</option>
                                            </select>
                                        </div>
                                    </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-md-12 enthic">
                                <div class="form-group">
                                        <label for="input" class="control-label">8. Dân tộc *:</label>
                                        <div class="">
                                            <select name="dantoc" id="enthic" class="form-control">
                                                <option value="Kinh">Kinh</option>
                                                <option value="Thái">Thái</option>
                                                <option value="Mường">Mường</option>
                                                <option value="Khmer">Khmer</option>
                                                <option value="H'Mông">H'Mông</option>
                                                <option value="Gia Rai">Gia Rai</option>
                                                <option value="">Ba Na</option>
                                                <option value="">Chăm</option>
                                                <option value="">Mnông</option>
                                                <option value="">Ra Glai</option>
                                                <option value="">Hrê</option>
                                                <option value="">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 religion">
                                <div class="form-group">
                                        <label for="input" class="control-label">9. Tôn giáo *:</label>
                                        <div class="">
                                            <select name="tongiao" id="religion" class="form-control">
                                                <option value="Không">KHÔNG</option>
                                                <option value="Phật giáo">ĐẠO PHẬT</option>
                                                <option value="Thiên chúa giáo">ĐẠO THIÊN CHÚA </option>
                                                <option value="Cao đài">ĐẠO CAO ĐÀI</option>
                                                <option value="Hòa hảo">ĐẠO HÒA HẢO</option>
                                                <option value="Tin lành">ĐẠO TIN LÀNH</option>
                                                <option value="Đạo hồi">ĐẠO HỒI</option>
                                                <option value="Khác">KHÁC</option>
                                            </select>
                                        </div>
                                    </div>

                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 phone">
                                <div class="form-group">
                                        <div class="form-group">
                                                <label for="">10. Số điện thoại *:</label>
                                                <input type="text" class="form-control" onblur="checkphone()" name="sdt" id="phone" aria-describedby="helpId" placeholder="Vui lòng nhập số điện thoại" pattern="^\d{10}$" title="Nhập 10 chữ số " required  >
                                             </div>
                                </div>
                        </div>

                        <div class="col-lg-8 col-sm-12 col-md-12 email">
                                <div class="form-group">
                                        <div class="form-group"id="divemail" >
                                                <label for="">11. Email:</label>
                                                <input type="text" class="form-control" onblur="check2()" name="email" id="email" aria-describedby="helpId" pattern="^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$" title="nhập đúng định dạng địa chỉ email" required placeholder="Vui lòng nhập địa chỉ email">
                                             </div>

                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-12  image">
                                <div class="form-group">
                                        <div class="form-group"id="divemail" >
                                                <label for="">12. Hình thẻ (3*4)</label>
                                                <input type="file"  accept="image/gif, image/jpeg, image/png" class="form-control" name="hinh" id="fileHinh" aria-describedby="helpId" required>
                                        </div>

                                </div>
                        </div>
                        <script>

                        </script>

                        <div class="col-lg-2 col-sm-2 col-md-2 address">
                                <div class="form-group">
                                        <label for="input" class="control-label">13. Nơi cấp:</label>
                                        <div class="">
                                            <select name="noicap" id="address" class="form-control">
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="TP HCM">TP HCM</option>
                                                <option value="An Giang"> An Giang</option>
                                                <option value="Bà Rịa – Vũng Tàu">Bà Rịa – Vũng Tàu</option>
                                                <option value="Bắc Giang">Bắc Giang</option>
                                                <option value="Bắc Kạn">Bắc Kạn</option>
                                                <option value="Bắc Ninh">Bắc Ninh</option>
                                                <option value="Bến Tre">Bến Tre</option>
                                                <option value="Bình Định">Bình Định</option>
                                                <option value="Bình Dương"> Bình Dương</option>
                                                <option value="Bình Phước">Bình Phước</option>
                                                <option value="Bình Thuận"> Bình Thuận</option>
                                                <option value="Cà Mau">Cà Mau</option>
                                                <option value="Cần Thơ">    Cần Thơ</option>
                                                <option value="Cao Bằng">Cao Bằng</option>
                                                <option value="Đà Nẵng">    Đà Nẵng</option>
                                                <option value="Đắk Lắk">    Đắk Lắk</option>
                                                <option value="Đắk Nông">   Đắk Nông</option>
                                                <option value="Điện Biên">Điện Biên</option>
                                                <option value="Đồng Na">    Đồng Nai</option>
                                                <option value="Khánh Hòa">Khánh Hòa</option>
                                                <option value="Kiên Giang">Kiên Giang</option>
                                                <option value="Yên Bái<">Yên Bái</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Vĩnh Long">  Vĩnh Long</option>
                                                <option value="Trà Vinh">Trà Vinh</option>
                                                <option value="Tiền Giang">Tiền Giang</option>
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                <option value="Thanh Hóa">Thanh Hóa</option>
                                                <option value="Thái Nguyên">Thái Nguyên</option>
                                                <option value="Thái Bình">Thái Bình</option>

                                                <option value="Tây Ninh">Tây Ninh</option>
                                                <option value="Sơn La">Sơn La</option>
                                                <option value="Sóc Trăng">  Sóc Trăng</option>
                                                <option value="Quảng Trị">Quảng Trị</option>
                                                <option value="Quảng Ninh">Quảng Ninh</option>
                                                <option value="Quảng Ngãi">Quảng Ngãi</option>

                                                <option value="Quảng Nam">Quảng Nam</option>
                                                <option value="Phú Yên">    Phú Yên</option>
                                                <option value="Phú Thọ">Phú Thọ</option>
                                                <option value="Ninh Thuận">Ninh Thuận</option>
                                                <option value="Ninh Bình">Ninh Bình</option>
                                                <option value="Nghệ An">Nghệ An</option>

                                                <option value="Nam Định">Nam Định</option>
                                                <option value="Long An">Long An</option>
                                                <option value="Lào Cai">Lào Cai</option>
                                                <option value="Lạng Sơn">Lạng Sơn</option>
                                                <option value="Lâm Đồng">Lâm Đồng</option>
                                                <option value="Lai Châu">Lai Châu</option>
                                            </select>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 district">
                                <div class="form-group">
                                        <label for="">14. Quận/huyện:</label>
                                        <input type="text" class="form-control" onblur="check5();" name="quanhuyen" id="district" aria-describedby="helpId" placeholder="Vui lòng nhập quận huyện">
                                     </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 namedistrict">
                                <div class="form-group">
                                    <label for="">15. Số nhà & tên đường:</label>
                                        <input type="text" class="form-control"  onblur="checknamedistrict();" name="dcchitiet" id="namedistrict" aria-describedby="helpId" placeholder="Vui lòng nhập địa chỉ">
                                     </div>
                        </div>

                        <div class="col-lg-5 col-sm-12 col-md-12 job">
                                <div class="form-group">
                                        <label for="">16. Nghề Nghiêp:</label>
                                        <input type="text" class="form-control" onblur="check7();" name="nghenghiep" id="job" aria-describedby="helpId" placeholder="Vui lòng nhập nghề nghiệp">
                                     </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 col-md-12 wherejob">
                                <div class="form-group">
                                        <label for="">17. Tên công ty</label>
                                        <input type="text" class="form-control" onblur="check8();" name="tencongty" id="wherejob" aria-describedby="helpId" placeholder="Vui lòng nhập tên công ty" pattern="[A-Za-z]+"title="Nhập đúng định dạng " >
                                     </div>
                        </div>



                    </div>
                    <div class="row page2" id="type2">
                            <div class="col-lg-8 col-sm-12 col-md-12 namefather">
                                    <div class="form-group">
                                            <div class="form-group">
                                                    <label for="">18. Nhập Họ và Tên cha:</label>
                                                    <input type="text" class="form-control" name="hotencha" id="namefather" aria-describedby="helpId"  pattern="(?:[A-Z][a-z]*.{0,2}[a-z]*\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)" title="phải nhập chữ  hoa đầu câu"  placeholder="Vui lòng nhập họ và tên" required>
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-12 datebirth ">
                                    <div class="form-group">
                                            <div class="form-group">
                                                    <label for="">19. Ngày sinh:</label>
                                                    <input type="date" required class="form-control" name="ngaysinhcha" id="datepicker3" aria-describedby="helpId" placeholder="Vui lòng nhập họ và tên" required>
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-12 namemother">
                                    <div class="form-group">
                                            <div class="form-group">
                                                    <label for="">20. Nhập Họ và Tên Mẹ:</label>
                                                    <input type="text" class="form-control" name="hotenme" id="namemother" aria-describedby="helpId"  pattern="(?:[A-Z][a-z]*.{0,2}[a-z]*\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)" title="phải nhập chữ  hoa đầu câu"  placeholder="Vui lòng nhập họ và tên"required >
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-12 datebirth ">
                                    <div class="form-group">
                                            <div class="form-group ">
                                                    <label for="">21. Ngày sinh:</label>
                                                    <input type="date" required class="form-control" name="ngaysinhme" id="datepicker4" aria-describedby="helpId" placeholder="Vui lòng nhập họ và tên">
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-12 nameprincess">
                                    <div class="form-group">
                                            <div class="form-group">
                                                    <label for="">22. Nhập Họ và Tên Vợ/chồng:</label>
                                                    <input type="text" class="form-control" name="hotenvochong" id="namevo" aria-describedby="helpId"  pattern="(?:[A-Z][a-z]*.{0,2}[a-z]*\s*)+(?:[A-Z][a-z]*.{0,2}[a-z]*)*" title="phải nhập chữ  hoa đầu câu"  placeholder="Vui lòng nhập họ và tên" >
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-12 datebirth">
                                    <div class="form-group">
                                            <div class="form-group ">
                                                    <label for="">23. Ngày sinh:</label>
                                                    <input type="date" class="form-control" required name="ngaysinhvochong" id="datepicker5" aria-describedby="helpId" placeholder="Vui lòng nhập họ và tên">
                                                 </div>
                                    </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 btn-submit text-center">
                                <input type="submit" name="" id=""   value="Đăng kí cấp hộ chiếu" class="submit btn-warning">
                            </div>
                    </div>
                </div>
            </form>
            </div>
        <div class="container-fluid button-btn">
                <div class="container">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-12">
                                <button value="" class="btn btn-warning btn-back" name="" onclick="trans2()" id="page1" style="display:none">back</button>
                                <button value="" class="btn btn-warning btn-next"   onclick="trans1()" id="page2">Next</button>
                            </div>
                            <div class="col-lg-4"></div>

                </div>
            </div>
        </div>
        <!--footer-->
        <footer class="ftco-footer ftco-section">
            <p class="text-center " style="font-size: 15pt; color:#caa234">Bản quyền © 2017 Cục Quản lý xuất nhập cảnh - Bộ Công an</p>
            <p class="text-center"  style="font-size: 15pt; color:#caa234">Địa chỉ: Số 44-46 Trần Phú, Ba Đình, Hà Nội. ĐT: 04 3825 7941, Fax: 04 3824 3287, Email: vnimm@hn.vnn.vn</p>

        </footer>
    <script>
        @if(session('success'))
                alert('{{session('success')}}');
        @endif
        @if(session('danger'))
                alert('{{session('danger')}}');
        @endif
        @if(session('er'))
                alert('{{session('er')}}');
        @endif
    </script>
    <script>
        var _URL = window.URL || window.webkitURL;
        $("#fileHinh").change(function(e) {
        var image, file;
                if ((file = this.files[0])) {
                        image = new Image();
                        image.onload = function() {
                        if( (this.width>110 && this.width < 150) && (this.height > 150 && this.height < 160) ) {
                                jQuery("#fileHinh").css({"border":"1px solid #3333"});
                        }
                        else {
                                alert("Kích thước ảnh hộ chiếu: Ảnh cỡ 4x6cm, bề ngang của ảnh từ 35 - 40mm.");
                                $('#fileHinh').val('');
                                jQuery("#fileHinh").css({"border":"1px solid red"});
                        }
                };
        image.src = _URL.createObjectURL(file);}
        });
</script>
</body>
</html>
