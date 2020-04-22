@extends('layout')
@section('noidung')
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        header{
            height: 0px;
        }
        .boxtext-header{
            display: none;
        }
        table>tr>td{
            padding: 3vh 0;
        }
        .login-neo>.submit-neo{
            font-size: 1.5em;
        }

    </style>
</head>
    <div class="container-fluid wow bounceInUp" data-wow-delay="0.6s">

        <form method="post">
            @csrf
            <div class=" d-flex justify-content-center flex-column" style="margin: 19vh auto;" >
                <div class="container py-5 text-center ">
                    <i class="fa fa-user " aria-hidden="true" style="font-size:5em; color:#234c24"></i>
                    <h1 class="display-1"  style="color:#caa234">LOGIN</h1>
                </div>
                <div class="col-lg-3 login-neo form-group" style="margin: 0 auto;" >
                    <input type="text" class="form-control" name="username" placeholder="Username" >
                    <input type="password"  class="form-control my-3" name="password" placeholder="Password">
                    <input type="submit"  class="btn btn-block submit-neo" value="Đăng nhập" >
                </div>
            </div>
        </form>
    </div>
@endsection
