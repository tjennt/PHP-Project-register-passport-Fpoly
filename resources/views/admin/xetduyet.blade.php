@extends('layout_admin')
@section('noidung2')
<div class="container mt-4">
        <!-- title -->
        <section>
            <div class="alert alert-primary text-center">
                <h4>Trang chi tiết Hồ sơ Xét duyệt</h4>
                Hiện chi tiết hồ sơ
            </div>
        </section>
        <!-- end title -->


        <!-- table  -->
        <section>
            <form method="post">
                    @csrf

                    <div class="container border p-5 d-flex justify-content-center">
                        <div style="width:70%">
                            <table class="table table-light table-account " >
                                @foreach($data_hochieu as $item)
                                <input type="hidden" value="{{$item['id_hochieu']}}" name="id_hochieu">
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
                                {{-- <tr>
                                    <th>Người xác thực hồ sơ</th>
                                    <td>Admin 01</td>
                                </tr> --}}
                                @endforeach

                            </table>
                        </div>
                        <div class="d-flex justify-content-center" style="width:30%">
                            <table>
                                <tr>
                                    <td>
                                        <h5 class="text-center">Điều kiện xét duyệt:</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @foreach($data_hochieu as $itom)
                            
                                        <p class="text-center text-danger py-3">@if($itom->congdan['dk'] == 1) <span style='color: red; font-weight: bold'>Chưa đủ điều kiện</span> @else <span style='color: green; font-weight: bold'>Đủ điều kiện</span> @endif</p>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center"><img src="../hinh3x4/hinh1.jpg" alt="" class="shadow-sm border "></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Xét duyệt" class="btn btn-outline-primary btn-block my-3">
                                    </td>
                                </tr>
                            </form>
                                <tr>
                                    <td>
                                        <section>
                                            @foreach($data_hochieu as $item1)
                                            <form action="{{route('post.mail2')}}" method="post">
                                                <input type="hidden" name="id" value="{{$item1['id_hochieu']}}">
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-block" value="Hủy hồ sơ">
                                                <textarea class="form-control mt-3 " name="note" id="" cols="30" rows="15" placeholder="Nhập lỗi nếu có!" required ></textarea>
                                            </form>
                                            @endforeach
                                        </section>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>



        </section>
        <!-- Nút Xác nhận & Nhập lỗi -->

        <!-- end nút xác nhận & nhập lỗi -->
        <!-- end table -->
    </div>

<!-- end body -->
@endsection
{{-- <form method="post">
    <div class="trai" style="float: left; width: 400px">
        @foreach($data_hochieu as $item)
            {{{{$item['hoten']}}}}<br>
            <input type="hidden" value="{{{{$item['id_hochieu']}}}}" name="id_hochieu">
            {{{{$item['cmnd']}}}}<br>
            {{{{$item['ngaysinh']}}}}<br>
            {{{{$item['noisinh']}}}}<br>
            {{{{$item['noicap']}}}}<br>
            @if({{$item['tinhtrang']}} == 0)
                <p style="color: red">Dang cho xet duyet</p>
            @endif
        @endforeach
    </div>

        @csrf
        <input type="submit" value="Xet duyet"><br><br>
</form> --}}
    @if(session('done'))
        {{session('done')}}
    @endif
