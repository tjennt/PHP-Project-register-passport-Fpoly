@extends('layout_admin')
@section('noidung2')
<div class="container mt-4">
        <!-- title -->
        <section>
            <div class="alert alert-info text-center">
                <h4>Danh sách Hồ sơ</h4>
                Nơi cung cấp danh sách toàn bộ hồ sơ đăng ký cấp Hộ chiếu
            </div>
        </section>
        <!-- end title -->
        <!-- table -->
        <section>
            <div class="table-responsive-sm mt-3 ">
                <table class="table table-hover table-light table-nowarp">
                    <h5 class="text-danger mb-3">Danh sách chung:</h5>
                    <thead class="thead-light">
                        <tr>
                            <th>ID Admin</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Cấp bậc</th>
                            <th>Ngày Đăng ký</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_admin as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['username']}}</td>
                            <td>{{$item['name']}}</td>

                            <td><span class="text-primary">@if($item['level'] == 0) <span style="color:red">Xác Thực</span>@elseif($item['level'] == 1) <span style="color:blue">Xét Duyệt</span> @elseif($item['level'] == 2) <span style="color:green">Lưu trữ</span>
                                @elseif($item['level'] == 3) <span style="color:purple">Giám Sát</span> @else <span style="color:orange">Sếp</span>
                                @endif</span></td>
                            <td>{{$item['created_at']}}</td>
                            <td><a href="admin/fix/{{$item['id']}}">Sửa</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{!!$data_admin->links()!!}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <!-- End table -->
    </div>
    <!-- End body -->

@endsection
