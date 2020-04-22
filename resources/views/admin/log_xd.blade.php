@extends('layout_admin')
@section('noidung2')
<div class="container mt-4">
    <!-- title -->
    <section>
        <div class="alert alert-danger text-center">
            <h4>Bộ phận Xét duyệt</h4>
            Nơi xử lý hồ sơ đã <strong>Xác thực</strong> chờ <strong>Xét duyệt</strong>
        </div>
    </section>
    <!-- end title -->
    <!-- table chờ xác thực -->
    <section>
        <div class="  d-flex  justify-content-between align-items-center">
            <h5 class="text-danger pt-3 ">Danh sách chờ xét duyệt</h5>
            <!-- tìm kiếm -->
            <div>
                <label for="search" class=" m-2"><i class="fa fa-search" style="font-size:1.5em"></i></label>
                <input type="text" class="form-controller p-2" id="search" name="search" style="width: 300px" placeholder="Nhập mã hộ chiếu để tìm! (ex: 1)">
            </div>
            <!-- end tìm kiếm -->
        </div>
        <div class="table-responsive-sm mt-3 " id="xd2">
            <table class="table table-hover table-light table-nowarp ">

                <thead class="thead-light">
                    <tr>
                        <th>Id Hồ sơ</th>
                        <th>Tên người đăng ký</th>
                        <th>Số CMND</th>
                        <th>Ngày đăng ký</th>
                        <th>Tình trạng</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tfoot>
                    @foreach($log_xd as $item)
                        <tr>
                            <td>{{$item['id_hochieu']}}</td>
                            <td>{{$item->hochieu['hoten']}}</td>
                            <td>{{$item->hochieu['cmnd']}}</td>
                            <td>{{$item->hochieu['ngaycap']}}</td>
                            <td><span class="text-warning">Đã xét duyệt</span></td>
                            <td>
                                {{$item['created_at']}}
                            </td>
                        </tr>
                    @endforeach
                </tfoot>
            </table>
            <tr>
                {!!$log_xd->links()!!}
            </tr>
        </div>
        <!-- -->
        <div class="table-responsive-sm mt-3 " id="xd" style="display:none">
            <table class="table table-hover table-light table-nowarp ">
                <thead class="thead-light">
                    <tr>
                        <th>Id Hồ sơ</th>
                        <th>Tên người đăng ký</th>
                        <th>Số CMND</th>
                        <th>Ngày đăng ký</th>
                        <th>Tình trạng</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End table chờ xác thực -->

    </div>
    <!-- End body -->


    <!-- footer -->
    <section class="mb-5"></section>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            if($value != ""){
                document.getElementById("xd").style.display = "block";
                document.getElementById("xd2").style.display = "none";
                $.ajax({
                type : 'get',
                url : '{{URL::to('admin/log-xd/search')}}',
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
                document.getElementById("xd").style.display = "none";
                document.getElementById("xd2").style.display = "block";
            }
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection
