<h1>Xin chao</h1><br>
<h3>Ho so dang ky ho chieu cua ban bi huy do khong dung thong tin</h3><br>
@foreach($result as $item)
    Ho ten:{{$item['hoten']}}<br>
    CMND: {{$item['cmnd']}}<br>
    Ngay sinh: {{$item['ngaysinh']}}<br>
    Noi sinh: {{$item['noisinh']}}<br>
    Dia chi: {{$item['dc_thuong_tru']}}<br>
@endforeach