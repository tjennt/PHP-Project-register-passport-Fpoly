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

        <!-- tìm kiếm -->          
      
        <!-- end tìm kiếm -->

        <!-- table -->
        <section>

                <div class="table-responsive-sm mt-3 ">
                        <form method="post">
                            @csrf
                            <table style="margin: 0 auto; width: 30%; height: 120px; font-family:'Courier New', Courier, monospace; font-size: 14pt">
                                    <tr>
                                        <td>Username: </td>
                                        <td> <input type="text" name="username" style="border-radius: 5px;border: 1px solid #234c24; height: 30px"></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td><input type="password" name="password" style="border-radius: 5px;border: 1px solid #234c24; height: 30px"></td>
                                    </tr>
                                    <tr>
                                            <td>Confirm-Password:</td>
                                            <td><input type="password" name="cfpassword" style="border-radius: 5px;border: 1px solid #234c24; height: 30px"></td>
                                        </tr>
                                        <tr>
                                                <td>Fullname:</td>
                                                <td><input type="password" name="hoten" style="border-radius: 5px;border: 1px solid #234c24; height: 30px"></td>
                                            </tr>
                                            <tr>
                                                    <td>Email:</td>
                                                    <td><input type="email" name="email" style="border-radius: 5px;border: 1px solid #234c24; height: 30px"></td>
                                                </tr>
                                            
                                            <tr>
                                                    <td>Chức vụ:</td>
                                                    <td><select name="level" id="">
                                                            <option value="1">Xác thực</option>
                                                            <option value="2">Xét duyệt</option>
                                                            <option value="3">Giám sát</option>
                                                        </select></td>
                                                </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" value="Đăng nhập" style="background: #234c24; color: white; border: 1px solid #234c24; border-radius: 5px; width: 120px;height: 30px;"></td>
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
@endsection

{{-- @foreach($data_giamsat as $item)
        <p>{{$item['id_hochieu']}}</p>
        <p> {{$item['hoten']}}</p>
        @if($item['tinhtrang'] == 1) <span style="color:red">Dang cho xac thuc</span>@elseif($item['tinhtrang'] == 2) <span style="color:blue">Dang cho xet duyet</span> @elseif($item['tinhtrang'] == 3) <span style="color:green">Dang cho luu tru</span>
        @else <span style="color:purple">Da hoan tat</span>
        @endif
    @endforeach
    {!!$data_giamsat->links()!!} --}}
