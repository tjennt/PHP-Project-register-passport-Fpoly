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

        <!-- tìm kiếm -->
        <section>
            <div class="  d-flex justify-content-end align-items-center">
                <!-- tìm kiếm -->
                <div>
                    <label for="search" class=" m-2"><i class="fa fa-search" style="font-size:1.5em"></i></label>
                    <input type="text" class="form-controller p-2" id="search" name="search" style="width: 300px" placeholder="Nhập mã hộ chiếu để tìm! (ex: 1)">
                </div>
                <!-- end tìm kiếm -->
            </div>
        </section>
        <!-- end tìm kiếm -->

        <!-- table -->
        <section>
            <div class="table-responsive-sm mt-3 "  id="tt2">
                <table class="table table-hover table-light table-nowarp" >
                    <thead class="thead-light">
                        <tr>
                            <th>ID hồ sơ</th>
                            <th>Họ và tên</th>
                            <th>Số CMND</th>
                            <th>Ngày Đăng ký</th>
                            <th>Tình trạng</th>
                            <th>Ngày xử lý</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tfoot>
                        @foreach($data_giamsat as $item)
                        <tr >
                            <td>{{$item['id_nhatky']}}</td>
                            <td>{{$item->hochieu['hoten']}}</td>
                            <td>{{$item->hochieu['cmnd']}}</td>
                            <td>{{$item->hochieu['ngaycap']}}</td>
                            <td><span class="text-primary">@if($item['tinhtrang'] == 1) <span style="color:red">Đã xác thực</span>@elseif($item['tinhtrang'] == 2) <span style="color:blue">Đã xét duyệt</span> @elseif($item['tinhtrang'] == 3) <span style="color:green">Đã lưu trữ</span>
                                @else <span style="color:purple">Đã lưu trữ</span>
                                @endif</span></td>
                            <td>{{$item['created_at']}}</td>
                            <td>{{$item->admin['username']}}</td>
                        </tr>
                        @endforeach
                    </tfoot>
                </table>
                <tr>
                    {!!$data_giamsat->links()!!}
                </tr>
            </div>
            <div class="table-responsive-sm mt-3 " style="display:none" id="tt">
                <table class="table table-hover table-light table-nowarp" >
                    <thead class="thead-light">
                        <tr>
                            <th>ID hồ sơ</th>
                            <th>Họ và tên</th>
                            <th>Số CMND</th>
                            <th>Ngày Đăng ký</th>
                            <th>Tình trạng</th>
                            <th>Ngày xử lý</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </section>
        <!-- End table -->
    </div>
    <!-- End body -->

    <!-- footer -->
    <section class="mb-5"></section>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            if($value != ""){
                document.getElementById("tt").style.display = "block";
                document.getElementById("tt2").style.display = "none";
                $.ajax({
                type : 'get',
                url : '{{URL::to('admin/show-gs/show')}}',
                data:{'search':$value},
                success:function(data){
                $('tbody').html(data);
                }
            });
            }else{
                // $.ajax({
                // type : 'get',
                // url : '{{URL::to('admin/show-gs/show')}}',
                // data:{'search':$value},
                // success:function(data){
                // $('tfoot').html(data);
                document.getElementById("tt").style.display = "none";
                document.getElementById("tt2").style.display = "block";
            }
        })
        </script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
@endsection

{{-- @foreach($data_giamsat as $item)
        <p>{{$item['id_hochieu']}}</p>
        <p> {{$item['hoten']}}</p>
        @if($item['tinhtrang'] == 1) <span style="color:red">Dang cho xac thuc</span>@elseif($item['tinhtrang'] == 2) <span style="color:blue">Dang cho xet duyet</span> @elseif($item['tinhtrang'] == 3) <span style="color:green">Dang cho luu tru</span>
        @else <span style="color:purple">Da hoan tat</span>
        @endif
    @endforeach
    {!!$data_giamsat->links()!!} --}}
