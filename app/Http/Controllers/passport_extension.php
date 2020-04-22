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
use DB;
use Carbon\Carbon;

class passport_extension extends Controller
{
    public function get_extension(Request $request){
        if($request->code != null){
            $data = hochieu::where('checkcode',$request->code)->first();
            
            if($data){
                // $now = Carbon::now();
                // if(($now->diffInDays($data->timecode)) > 30){
                //     Session::flash('message', 'Hết thời gian hiệu lực!');
                //     Session::flash('alert-class', 'alert-danger'); 
                //     return view('home');
                // }else{
                    
                // }
                return view('search_pp');
            }else{
                $check10 = Session::flash('danger10','Đường dẫn đã hết hạn!');
                return redirect('home')->with($check10);
            }
        }else{
            return redirect('/');
        }
    }
    public function post_extension(Request $request){
        
        $check_code_hc = hochieu::where('checkcode',$request->code)->first();
        if(($check_code_hc->cmnd) == $request->scmnd){
            if(!empty($request->scmnd)){
                $hochieu = hochieu::where('cmnd',$request->scmnd)->first();
                if($hochieu == null){
                    return redirect("home/")->with('danger','Không tồn tại hộ chiếu');
                }else{
                    if($hochieu->tinhtranghsd == 1 && $hochieu->tinhtrang == 4){
                    $limit = Carbon::now();
                    $cd = bcrypt($limit);
                    $data = hochieu::where('cmnd',$request->scmnd)->update(['tinhtrang'=>0,'tinhtranghsd'=>0,'checkcode'=>$cd]);
                    return redirect("home/")->with('success','Đăng ký gia hạn thành công!');
                    }elseif($hochieu->tinhtranghsd == 0 && $hochieu->tinhtrang == 4){
                        return redirect("home/")->with('danger','Hộ chiếu này còn hạn sử dụng!');
                    }else{
                        return redirect("home/")->with('success','Hộ chiếu này đang chờ xử lý!');
                    }
                }
            }else{
                return redirect("home/")->with('danger','Vui lòng nhập thông tin!');
            }
        }else{
            return redirect()->back()->with('wrong','Số CMND nhập vào không khớp với CMND cần được gia hạn');
        }
        
        
    }
}
