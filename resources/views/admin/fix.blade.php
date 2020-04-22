@extends('layout_admin')
@section('noidung2')
    <div class="container mt-4">
        <!-- title -->
        <section>
            <div class="alert alert-info text-center">
                <h4>Danh sách admin</h4>
                Cập nhật danh sách admin
            </div>
        </section>
        <!-- end title -->
        <!-- table -->
        <section>
            <form method="post">
                @csrf
                <div class="table-responsive-sm mt-3 ">
                    <table class="table table-hover table-light table-nowarp">
                        <thead class="thead-light">
                            <tr>
                                <th>ID Admin</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Cấp bậc</th>
                                <th>Ngày Đăng ký</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($fix as $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td><input type="text" class="form-control" name="username" value="{{$item['username']}}"></td>
                                <td><input type="password" class="form-control" name="password" placeholder="******"></td>
                                <td><select name="level" class="form-control" id="">
                                @if($item['level'] == 0)
                                    <option value="0" selected>Xác thực</option>
                                    <option value="1">Xét duyệt</option>
                                    <option value="2">Lưu trữ</option>
                                    <option value="3">Giám sát</option>
                                @elseif($item['level'] == 1)
                                    <option value="0">Xác thực</option>
                                    <option value="1" selected>Xét duyệt</option>
                                    <option value="2">Lưu trữ</option>
                                    <option value="3">Giám sát</option>
                                @elseif($item['level'] == 2)
                                    <option value="0">Xác thực</option>
                                    <option value="1">Xét duyệt</option>
                                    <option value="2" selected>Lưu trữ</option>
                                    <option value="3">Giám sát</option>
                                @else
                                    <option value="0">Xác thực</option>
                                    <option value="1">Xét duyệt</option>
                                    <option value="2">Lưu trữ</option>
                                    <option value="3" selected>Giám sát</option>
                                @endif
                                <td>{{$item['created_at']}}</td>
                                <td><input type="submit" class="btn btn-outline-primary" value="Cập nhật"></td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </form>
        </section>
        <!-- End table -->
    </div>
    <!-- End body -->

    <!-- footer -->
    <section class="mb-5"></section>
@endsection

