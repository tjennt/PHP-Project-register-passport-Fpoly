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

class passport_controller extends Controller
{   
    public function get_showxt(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 0 || (admin::where('id',Auth::guard('admin')->id()))->first()->level == 5){
            $result_xt = hochieu::where('tinhtrang',0)->orderBy('id_hochieu','desc')->paginate(5);
            $log_xt = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            return view('admin.list_xt',['result_xt'=>$result_xt,'log_xt'=>$log_xt]);
        }else{
            return redirect('home/404');
        }
    }
    public function get_showxd(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == (1 || 5)){
            $log_xd = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            $result_xd = hochieu::where('tinhtrang',1)->orderBy('id_hochieu','desc')->paginate(5);
            return view('admin.list_xd',['result_xd'=>$result_xd,'log_xd'=>$log_xd]);
        }else{
            return redirect('home/404');
        }
    }
    public function get_showlt(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == (2 || 5)){
            $log_lt = nhatky::where('id_admin',Auth::guard('admin')->id())->orderBy('id_nhatky','desc')->paginate(5);
            $result_lt = hochieu::where('tinhtrang',2)->orderBy('id_hochieu','desc')->paginate(5);
            return view('admin.list_lt',['result_lt'=>$result_lt,'log_lt'=>$log_lt]);
        }else{
            return redirect('home/404');
        }
    }
    public function get_showgs(){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == (3 || 5)){
            $data_giamsat = nhatky::orderBy('id_nhatky','desc')->paginate(5);
            return view('admin.giamsat',['data_giamsat'=>$data_giamsat]);
        }else{
            return redirect('home/404');
        }   
    }
    public function get_luutru($id){ 
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == (4 || 5)){
            $data_hochieu2 = nhatky::where('id_congdan',$id)->first();
            if($data_hochieu2 != null){
                if($data_hochieu2->tinhtrang == 2){
                    $data_hochieu = hochieu::where('id_congdan',$id)->get();
                    return view('admin.luutru',['data_hochieu'=>$data_hochieu]);
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
    public function post_luutru($id){
        $hochieu = hochieu::where('id_hochieu',$id)->first();
        if(!$hochieu){
            return view('admin.404');
        }else{
            $hansudung = Carbon::now()->addMinutes(2);
            $data_nhatky = new nhatky();
            $data_nhatky->id_admin = Auth::guard('admin')->user()->id;
            $data_nhatky->id_hochieu = $id;
            $data_nhatky->tinhtrang = 3;
            $data_nhatky->save();
            $update_hochieu = hochieu::where('id_hochieu',$id)->update(['id_admin'=>Auth::guard('admin')->user()->id,'tinhtrang'=>3,'user_admin'=>Auth::guard('admin')->user()->username,'hansudung'=>$hansudung]);
            $email = hochieu::where('id_hochieu',$id)->first()->email;
            $data_luutru = new luutru();
            $data_luutru->id_hochieu = $id;
            $data_luutru->save();
            return redirect('admin/show-lt')->with('done','Cap nhat thanh cong');
        }
    }
    public function get_xetduyet($id){
        if((admin::where('id',Auth::guard('admin')->id()))->first()->level == 1){
            $data_hochieu2 = hochieu::where('id_congdan',$id)->first();
            if($data_hochieu2 != null){
                if($data_hochieu2->tinhtrang == 1){
                    $data_hochieu = hochieu::where('id_congdan',$id)->get();
                    return view('admin.xetduyet',['data_hochieu'=>$data_hochieu]);
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
    public function post_xetduyet(Request $request){
        $data_nhatky = new nhatky();
        $data_nhatky->id_admin = Auth::guard('admin')->user()->id;
        $data_nhatky->id_hochieu = $request->id_hochieu;
        $data_nhatky->tinhtrang = 2;
        $data_nhatky->save();
        $update_hochieu = hochieu::where('id_hochieu',$request->id_hochieu)->update(['id_admin'=>Auth::guard('admin')->user()->id,'tinhtrang'=>2,'user_admin'=>Auth::guard('admin')->user()->username]);
        return redirect('admin/show-xd')->with('done','Cap nhat thanh cong');
    }
    public function get_showgs2(Request $request){

        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= nhatky::where('id_nhatky','like','%'.$request->search."%")->get();
            
            if($products){

            foreach ($products as $product) {
                if($product->hochieu['tinhtrang'] == 0){
                    $tt = "<span style='color: red'>Chưa xác thực</span>";
                }elseif($product->hochieu['tinhtrang'] == 1){
                    $tt = "<span style='color: blue'>Đã xác thực</span>";
                }elseif($product->hochieu['tinhtrang'] == 0){
                    $tt = "<span style='color: purple'>Đã xét duyệt</span>";
                }else{
                    $tt = "<span style='color: green'>Đã lưu trữ</span>";
                }
            $output.='<tr>'.
                
            '<td>'.$product->id_nhatky.'</td>'.

            '<td>'.$product->hochieu['hoten'].'</td>'.

            '<td>'.$product->hochieu['cmnd'].'</td>'.

            '<td>'.$product->hochieu['ngaycap'].'</td>'.

            '<td>'.$tt.'</td>'.

            '<td>'.$product->created_at.'</td>'.

            '<td>'.$product->admin['username'].'</td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                $data_giamsat = nhatky::orderBy('id_nhatky','asc')->paginate(5);
                // return redirect('admin/show-gs',['data_giamsat'=>$data_giamsat]);
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function post_log_xt(Request $request){

        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= nhatky::where('id_hochieu','like','%'.$request->search."%")->where('id_admin',Auth::guard('admin')->id())->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->hochieu['id_hochieu'].'</td>'.

            '<td>'.$product->hochieu['hoten'].'</td>'.

            '<td>'.$product->hochieu['cmnd'].'</td>'.

            '<td>'.$product->hochieu['ngaycap'].'</td>'.

            '<td class="text-warning">Đã xác thực</td>'.

            '<td>'.$product->created_at.'</td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                // $data_giamsat = nhatky::orderBy('id_nhatky','asc')->paginate(5);
                // return redirect('admin/show-gs',['data_giamsat'=>$data_giamsat]);
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function get_log_xd2(Request $request){

        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= nhatky::where('id_hochieu','like','%'.$request->search."%")->where('id_admin',Auth::guard('admin')->id())->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->hochieu['id_hochieu'].'</td>'.

            '<td>'.$product->hochieu['hoten'].'</td>'.

            '<td>'.$product->hochieu['cmnd'].'</td>'.

            '<td>'.$product->hochieu['ngaycap'].'</td>'.

            '<td class="text-warning">Đã xác thực</td>'.

            '<td>'.$product->created_at.'</td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                // $data_giamsat = nhatky::orderBy('id_nhatky','asc')->paginate(5);
                // return redirect('admin/show-gs',['data_giamsat'=>$data_giamsat]);
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function get_log_lt2(Request $request){

        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= nhatky::where('id_hochieu','like','%'.$request->search."%")->where('id_admin',Auth::guard('admin')->id())->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->hochieu['id_hochieu'].'</td>'.

            '<td>'.$product->hochieu['hoten'].'</td>'.

            '<td>'.$product->hochieu['cmnd'].'</td>'.

            '<td>'.$product->hochieu['ngaycap'].'</td>'.

            '<td class="text-warning">Đã lưu trữ</td>'.

            '<td>'.$product->created_at.'</td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                // $data_giamsat = nhatky::orderBy('id_nhatky','asc')->paginate(5);
                // return redirect('admin/show-gs',['data_giamsat'=>$data_giamsat]);
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function get_showxt2(Request $request){
        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= hochieu::where('id_hochieu','like','%'.$request->search."%")->where('tinhtrang',0)->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->id_hochieu.'</td>'.

            '<td>'.$product->hoten.'</td>'.

            '<td>'.$product->cmnd.'</td>'.

            '<td>'.$product->ngaycap.'</td>'.

            '<td class="text-warning">Chờ xác thực</td>'.

            '<td><a name="" id="" class="btn btn-primary" href="admin/show/'.$product->id_congdan.'" role="button">Xác thực</a></td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function get_showxd2(Request $request){
        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= hochieu::where('id_hochieu','like','%'.$request->search."%")->where('tinhtrang',1)->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->id_hochieu.'</td>'.

            '<td>'.$product->hoten.'</td>'.

            '<td>'.$product->cmnd.'</td>'.

            '<td>'.$product->ngaycap.'</td>'.

            '<td class="text-warning">Chờ xác thực</td>'.

            '<td><a name="" id="" class="btn btn-primary" href="admin/xetduyet/'.$product->id_congdan.'" role="button">Xác thực</a></td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function get_showlt2(Request $request){
        if($request->ajax()){
            if($request->search != null){
                
            $output ="";
            $products= hochieu::where('id_hochieu','like','%'.$request->search."%")->where('tinhtrang',2)->get();
    
            if($products){

            foreach ($products as $product) {
            
            $output.='<tr>'.
                
            '<td>'.$product->id_hochieu.'</td>'.

            '<td>'.$product->hoten.'</td>'.

            '<td>'.$product->cmnd.'</td>'.

            '<td>'.$product->ngaycap.'</td>'.

            '<td class="text-warning">Chờ lưu trữ</td>'.

            '<td><a name="" id="" class="btn btn-primary" href="admin/luutru2/'.$product->id_hochieu.'" role="button">Lưu trữ</a></td>'.

            '</tr>';
            
            ;

                }
            return Response($output);
            
            }
            }else{
                $output = "";
                return Response($output);
            }
            return view('admin.404');
        }
        return view('admin.404');
    }
    public function post_error_mail(Request $request){
        $update_error = hochieu::where('id_hochieu',$request->id)->update(['tinhtrang'=>5,'note_error'=>$request->note,'id_admin'=> Auth::guard('admin')->user()->id,'user_admin'=>Auth::guard('admin')->user()->username]);
        return redirect('admin/show-xt');
    }
    public function post_error_mail2(Request $request){
        $update_error = hochieu::where('id_hochieu',$request->id)->update(['tinhtrang'=>5,'note_error'=>$request->note,'id_admin'=> Auth::guard('admin')->user()->id,'user_admin'=>Auth::guard('admin')->user()->username]);
        return redirect('admin/show-xd');
    }
    public function get_search_passport(){
        return view('search_pp');
    }
    public function post_search_passport(Request $request){
        $data_s = hochieu::where('cmnd',$request->scmnd)->first();
        if(!$data_s){
            $check = Session::flash('danger','Không tồn tại cmnd này');
            return redirect()->back()->with($check);
        }else{
            if($data_s->tinhtrang == 0){
                $text = 'Hộ chiếu của bạn đang chờ xác thực';
            }elseif($data_s->tinhtrang == 1){
                $text = 'Hộ chiếu của bạn đã được xác thực, đang chờ xét duyệt';
            }elseif($data_s->tinhtrang == 2){
                $text = 'Hộ chiếu của bạn đã được xét duyệt, đang chờ lưu trữ';
            }elseif($data_s->tinhtrang == 3 || $data_s->tinhtrang == 4){
                $text = 'Hộ chiếu của bạn đã được đăng ký thành công vui lòng kiểm tra email để xem thông báo';
            }else{
                $text = 'Hộ chiếu của bạn đã bị hủy do sai thông tin, vui lòng kiểm tra email để xem thông báo';
            }
            Session::flash('success_s',$text);
            return redirect()->back();
        }
    }
    public function get_contact(){
        return view('contact');
    }
    public function get_note(){
        return view('note');
    }
}
