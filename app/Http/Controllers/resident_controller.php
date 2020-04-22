<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware;
use App\congdan;
use App\hochieu;
use App\nhatky;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;
use Carbon\Carbon;
use App\admin;
use App\Http\Requests;

class resident_controller extends Controller
{
    public function get_signup(){
        return view('resident.signup_resident');
    }
    public function post_signup(Request $request){
        $cmnd = $request->cmnd;
        $check_hochieu = hochieu::where('cmnd',$cmnd)->first();;
        if(!$check_hochieu){
            $data_cmd = congdan::where('cmnd',$cmnd)->first();
        
            if($data_cmd == null){
                return redirect()->back()->with('danger','Ban ko phai cong dan viet nam');
            }else{
                $namefile = $request->file('hinh')->getClientOriginalName();
                $nameImg = $request->cmnd.$namefile;
                $file = $request->file('hinh');
                $file->move(base_path('public/hinh3x4'),$nameImg);
                $them = new hochieu();
                $them->id_congdan = $data_cmd->id_congdan;
                $them->id_admin = 1;
                $them->hoten = strtoupper($request->username);
                $them->ngaysinh = $request->ngaysinh;
                $them->noisinh = $request->noisinh;
                $them->gioitinh = $request->gioitinh;
                $them->cmnd = $cmnd;
                $them->ngaycap = $request->ngaycap;
                $them->noicap = $request->noicap;
                $them->dantoc = $request->dantoc;
                $them->tongiao = $request->tongiao;
                $them->email = $request->email;
                $them->sdt = $request->sdt;
                $them->dc_thuong_tru = $request->quanhuyen;
                $them->quanhuyen = $request->quanhuyen;
                $them->ten_dc_coquan = $request->tencongty;
                $them->dc_chi_tiet = $request->dcchitiet;
                $them->nghenghiep = $request->nghenghiep;
                $them->hoten_cha = $request->hotencha;
                $them->hoten_me = $request->hotenme;
                $them->ngaysinh_cha = $request->ngaysinhcha;
                $them->ngaysinh_me = $request->ngaysinhme;
                $them->hoten_vochong = $request->hotenvochong;
                $them->ngaysinh_vochong = $request->ngaysinhvochong;
                $them->tinhtrang = 0;
                $them->hinh = $nameImg;
                $them->save();
                return redirect()->back()->with('success','Dang ky thanh cong');
            }
        }else{
            return redirect()->back()->with('er','CMND nay da dc dang ky ho chieu');
        }
    }
    public function get_show($id){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 0){
            $data_hochieu2 = hochieu::where('id_congdan',$id)->first();
            if($data_hochieu2 != null){
                if($data_hochieu2->tinhtrang == 0){
                    $data_hochieu = hochieu::where('id_congdan',$id)->get();
                    $data_congdan = congdan::where('id_congdan',$id)->get();
                    return view('admin.xacthuc',['data_hochieu'=>$data_hochieu,'data_congdan'=>$data_congdan]);
                }else{
                    return redirect()->back()->with('error','Ho chieu nay da duoc xac thuc');
                }
            }else{
                return redirect()->back()->with('error2','Khong ton tai');
            }
        }else{
            return redirect()->back();
        }
    }
    public function post_show(Request $request){
        $data_nhatky = new nhatky();
        $data_nhatky->id_admin = Auth::guard('admin')->user()->id;
        $data_nhatky->id_hochieu = $request->id_hochieu;
        $data_nhatky->tinhtrang = 1;
        $data_nhatky->save();
        $data = hochieu::where('id_hochieu',$request->id_hochieu)->update(['id_admin'=>Auth::guard('admin')->user()->id,'tinhtrang'=>1,'user_admin'=>Auth::guard('admin')->user()->username]);
        return redirect('admin/show-xt')->with('done','Cap nhat thanh cong');
    }
    public function get_send_mail(){
        return view('admin.note_error');
    }
    public function send_mail(Request $request,$id){
        $num = Auth::guard('admin')->id();
        $level_admin = admin::where('id',$num)->first();
        if($level_admin->level == 0){
            $error_id = hochieu::where('id_hochieu',$id)->first();
            $code = bcrypt(Carbon::now());
            $result = hochieu::where('id_hochieu',$id)->get();
            $error = hochieu::where('id_hochieu',$id)->update(['checkcode'=> $code]);
            $url = route('get.link',['code'=>$code,'email'=>$error_id->email]);
            $data = array('email'=>$error_id->email,'note'=>$request->note,'url'=>$url,'error'=>$error_id,'result'=>$result);
            Mail::send('mail',$data,function($message) use ($data){
                $message->from('huuloihuynh1610@gmail.com','Passport');
                $message->to($data['email'],$data['note'])->subject('Thông tin hộ chiếu');
                });
            hochieu::where('id_hochieu',$id)->update(['tinhtrang'=>4,'user_admin'=>Auth::guard('admin')->user()->username]);
            return redirect('admin/show-xt');
        }else{
            return redirect()->back();
        }        
    }
    public function get_formupdate(Request $request){
        $code = $request->code;
        $email = $request->email;
        $data = hochieu::where(['checkcode'=>$code,'email'=>$email])->first();
        if(!$data){
            return redirect('home/404');
        }else{
            $data = hochieu::where('checkcode',$code)->first();
            return view('resident.form_update',['data'=>$data]);
        }
    }
    public function post_formupdate(Request $request){

        return view('resident.form_update');
    }
    public function get_404(){
        return view('resident.404');
    }
}
