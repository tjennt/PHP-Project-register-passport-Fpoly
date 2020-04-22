<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\congdan;
use App\hochieu;
use App\nhatky;
use App\admin;
use Session;
use App\luutru;

class log_controller extends Controller
{
    public function get_log_xt(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 0 || (admin::where('id',Auth::guard('admin')->id()))->first()->level == 5){
            $log_xt = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            return view('admin.log_xt',['log_xt'=>$log_xt]);
        }else{
            return redirect('home/404');
        }
    }
    public function get_log_xd(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 1 || (admin::where('id',Auth::guard('admin')->id()))->first()->level == 5){
            $log_xd = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            return view('admin.log_xd',['log_xd'=>$log_xd]);
        }else{
            return redirect('home/404');
        }
    }
    public function get_log_lt(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 2 || (admin::where('id',Auth::guard('admin')->id()))->first()->level == 5){
            $log_lt = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            return view('admin.log_lt',['log_lt'=>$log_lt]);
        }else{
            return redirect('home/404');
        }
    }
}
