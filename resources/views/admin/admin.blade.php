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
        <div class="d-flex justify-content-center">
            <form method="post">
                @csrf
                <table class="form-group">
                        <tr>
                            <td>Username: </td>
                            <td> <input type="text" class="form-control" name="username"  required></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" class="form-control" name="password"   required></td>
                        </tr>
                        <tr>
                                <td>Confirm-Password:</td>
                                <td><input type="password" class="form-control" name="cfpassword"   required></td>
                            </tr>
                        <tr>
                            <td>Fullname:</td>
                            <td><input type="text" class="form-control" name="hoten"  required></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" class="form-control" name="email"  required></td>
                        </tr>

                        <tr>
                            <td>Chức vụ:</td>
                            <td><select name="level" class="form-control" id="">
                                    <option value="1">Xác thực</option>
                                    <option value="2">Xét duyệt</option>
                                    <option value="3">Giám sát</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit"  value="Thêm" class="btn btn-block btn-outline-primary mt-3"></td>
                        </tr>
                </table>

            </form>
        </div>
    </section>
    <!-- End table -->
    </div>
    <!-- End body -->
    <!-- footer -->
    <section class="mb-5"></section>
    <script>
        @if(session('success'))
            alert('{{session('success')}}');
        @endif
    </script>
@endsection

