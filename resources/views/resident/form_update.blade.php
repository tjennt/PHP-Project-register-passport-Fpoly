<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="{{asset('')}}">
</head>
<body>
    <form method="post">
@csrf
    Hoten: <input type="text" name="hoten" value="{{$data->hoten}}"><br>
        CMND: <input type="text" name="cmnd" value="{{$data->cmnd}}"><br>
        D/C: <input type="text" name="diachi" value="{{$data->dc_thuong_tru}}"><br>
        Quan Huyen: <input type="text" name="quanhuyen" value="{{$data->quanhuyen}}"><br>
        Noi sinh: <input type="text" name="namsinh" value="{{$data->noisinh}}"><br>
        <input type="submit">
    </form>
</body>
</html>