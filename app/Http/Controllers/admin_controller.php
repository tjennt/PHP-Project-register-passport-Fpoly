<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Middleware;
use Illuminate\Support\Facades\Mail;
use Session;
use App\admin;
use App\hochieu;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Carbon\Carbon;

class admin_controller extends Controller
{
    public function get_admin(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 5){
            return view('admin.admin');
        }else{
            return redirect('home/404');
        }
    }
    public function post_admin(Request $request){
        if($request->password != $request->cfpassword){
            return redirect()->back()->with('danger','Mat khau khong trung khop');
        }else{
            $admin = new admin();
            $admin->username = $request->username;
            $admin->password = bcrypt($request->password);
            $admin->name = $request->hoten;
            $admin->email = $request->email;
            $admin->level = $request->level;
            $admin->save();
            return redirect()->back()->with('success','Them thanh cong');
        }
    }
    public function get_login(Request $request){
        if(Auth::guard('admin')->check()){
            $level = Auth::guard('admin')->user()->level;
            if($level == 1){
                return redirect('admin/show-xd');
            }elseif($level == 0){
                return redirect('admin/show-xt');
            }elseif($level == 2){
                return redirect('admin/show-lt');
            }elseif($level == 3){
                return redirect('admin/show-gs');
            }else{
                return redirect('admin/home');
            }
        }else{
            return view('admin.login');
        }
    }
    public function post_login(Request $request){
        if (Auth::guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password])){
            Session::put('admin',Auth::guard('admin')->user()->username);
            $level = Auth::guard('admin')->user()->level;
            if($level == 1){
                return redirect('admin/show-xd');
            }elseif($level == 0){
                return redirect('admin/show-xt');
            }elseif($level == 2){
                return redirect('admin/show-lt');
            }elseif($level == 3){
                return redirect('admin/show-gs');
            }else{
                return redirect('admin/home');
            }
            return redirect('admin/show-xt');
        } else {
            return redirect()->back()->with('danger','Sai thong tin dang nhap');
        }
    }
    public function get_logout(){
        Auth::guard('admin')->logout();
        Session::forget('admin');
        return redirect('home/login');
    }
    public function get_home(){
        $co = hochieu::all()->count();
        return view('home',['co'=>$co]);
    }
    public function get_home_admin(){
        if(Auth::guard('admin')->user()->level == 5){
            $data_admin = admin::paginate(10);
            return view('admin.home',['data_admin'=>$data_admin]);
        }else{
            return view('admin.404');
        }
    }
    public function get_fix($id){
        if(Auth::guard('admin')->id() == 5){
            $fix = admin::where('id',$id)->get();
            return view('admin.fix',['fix'=>$fix]);
        }else{
            return view('admin.404');
        }
    }
    public function post_fix(Request $request,$id){
        if(Auth::guard('admin')->user()->level == 5){
            if(!$request->password){
                $update = admin::where('id',$id)->update([
                    'username'=>$request->username,
                    'level'=>$request->level
                ]);
                return redirect('admin/home')->with('success','Cập nhật thành công');
            }else{
                $update = admin::where('id',$id)->update([
                    'username'=>$request->username,
                    'password'=>bcrypt($request->password),
                    'level'=>$request->level
                ]);
                return redirect('admin/home')->with('success','Cập nhật thành công');
            }
       }else{
           return view('admin.404');
       }
    }
    public function get_date(){
        $date1a = Carbon::now();
        $date1 = Carbon::now();
        $date2 = $date1->addDays(365);
        if($date2->diffInDays($date1a) == 365){
            $date = "hello";
        }else{
            $date = "hi";
        }
        return view('date',['date'=>$date]);
    }
}
