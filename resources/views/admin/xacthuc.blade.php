@extends('layout_admin')
@section('noidung2')

<div class="container mt-4">
        <!-- title -->
        <section>
            <div class="alert alert-primary text-center">
                <h4>Trang chi tiết Hồ sơ Xác thực</h4>
                Hiện chi tiết hồ sơ
            </div>
        </section>
        <!-- end title -->

        <!-- table  -->
        <section>
            <div class="row">
                <div class="col-6 border border-light p-3">
                    <table class="table table-light table-account">
                        @foreach($data_hochieu as $item)
                    <h5>Hồ sơ đăng ký <span class="text-danger">{{$item['id_hochieu']}}</span></h5>
                        <tr>
                            <th>Họ và tên</th>
                            <td>{{$item['hoten']}}</td>
                        </tr>
                        <tr>
                            <th>Giới tính</th>
                            <td>{{$item['gioitinh']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item['ngaysinh']}}</td>
                        </tr>
                        <tr>
                            <th>Nơi sinh</th>
                            <td>{{$item['noisinh']}}</td>
                        </tr>
                        <tr>
                            <th>Giấy CMND / TCCCD</th>
                            <td>{{$item['cmnd']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày cấp</th>
                            <td>{{$item['ngaycap']}}</td>
                        </tr>
                        <tr>
                            <th>Nơi cấp</th>
                            <td>{{$item['noicap']}}</td>
                        </tr>
                        <tr>
                            <th>Dân tộc</th>
                            <td>{{$item['dantoc']}}</td>
                        </tr>
                        <tr>
                            <th>Tôn giáo</th>
                            <td>{{$item['tongiao']}}</td>
                        </tr>
                        <tr>
                            <th>Số điện thoại</th>
                            <td>{{$item['sdt']}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ thường trú</th>
                            <td>{{$item['dc_thuong_tru']}}</td>
                        </tr>
                        <tr>
                            <th>Nghề nghiệp</th>
                            <td>{{$item['nghenghiep']}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ công ty</th>
                            <td>{{$item['ten_dc_coquan']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên cha</th>
                            <td>{{$item['hoten_cha']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item['ngaysinh_cha']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên mẹ</th>
                            <td>{{$item['hoten_me']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item['ngaysinh_me']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên Vợ/Chồng</th>
                            <td>{{$item['hoten_vochong']}}</td>
                        </tr>
                        {{-- <tr>
                            <th>Cơ quan tiếp nhận</th>
                            <td>Tp.Hồ Chí Minh</td>
                        </tr> --}}
                        @endforeach
                    </table>
                </div>
                <div class="col-6 border border-light p-3">
                    <table class="table table-light table-account">
                        @foreach($data_congdan as $item2)
                        <h5>Hồ sơ Công dân</h5>
                        <tr>
                            <th>Họ và tên</th>
                            <td>{{$item2['hoten']}}</td>
                        </tr>
                        <tr>
                            <th>Giới tính</th>
                            <td>{{$item2['gioitinh']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item2['ngaysinh']}}</td>
                        </tr>
                        <tr>
                            <th>Nơi sinh</th>
                            <td>{{$item2['noisinh']}}</td>
                        </tr>
                        <tr>
                            <th>Giấy CMND / TCCCD</th>
                            <td>{{$item2['cmnd']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày cấp</th>
                            <td>{{$item2['ngaycap']}}</td>
                        </tr>
                        <tr>
                            <th>Nơi cấp</th>
                            <td>{{$item2['noicap']}}</td>
                        </tr>
                        <tr>
                            <th>Dân tộc</th>
                            <td>{{$item2['dantoc']}}</td>
                        </tr>
                        <tr>
                            <th>Tôn giáo</th>
                            <td>{{$item2['tongiao']}}</td>
                        </tr>
                        <tr>
                            <th>Số điện thoại</th>
                            <td>{{$item2['sdt']}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ thường trú</th>
                            <td>{{$item2['dc_thuong_tru']}}</td>
                        </tr>
                        <tr>
                            <th>Nghề nghiệp</th>
                            <td>{{$item2['nghenghiep']}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ công ty</th>
                            <td>{{$item2['ten_dc_coquan']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên cha</th>
                            <td>{{$item2['hoten_cha']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item2['ngaysinh_cha']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên mẹ</th>
                            <td>{{$item2['hoten_me']}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{$item2['ngaysinh_me']}}</td>
                        </tr>
                        <tr>
                            <th>Họ tên Vợ/Chồng</th>
                            <td>{{$item2['hoten_vochong']}}</td>
                        </tr>
                        <tr>
                            <th>Tiền án tiền sự</th>
                            <td>{{$item2['dk']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
        <!-- end table -->

        <!-- Nút Xác nhận & Nhập lỗi -->
        <section class="mt-3">
            <form method="post" >
                @csrf
                @foreach($data_hochieu as $item1)
                <input type="hidden" value="{{$item1['id_hochieu']}}" name="id_hochieu">
                @endforeach
                <input type="submit" class="btn btn-primary" value="Xác Thực">
            </form><br>
       @foreach($data_hochieu as $item1)
       <form action="{{route('post.mail')}}" method="post">
        <input type="hidden" name="id" value="{{$item1['id_hochieu']}}">
        @csrf
        <input type="submit" class="btn btn-danger" value="Hủy hồ sơ">
        <textarea class="form-control mt-3" name="note" id="" cols="30" rows="5" placeholder="Nhập lỗi nếu có!"></textarea>
    </form>
       @endforeach
        </section>
        <!-- end nút xác nhận & nhập lỗi -->
    </div>
<!-- end body -->

<!-- footer -->
<section class="mb-5"></section>

@if(session('done'))
        {{session('done')}}
@endif<br>
@if(session('error'))
    {{session('error')}}
@endif
@endsection
