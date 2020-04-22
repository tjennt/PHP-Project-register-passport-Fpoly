<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hochieu;
use App\nhatky;
use App\admin;
use App\luutru;

class search_controller extends Controller
{
    public function get_search_xt(){
        return view('admin.404');
    }
    public function post_search_xt(Request $request){
        $tukhoa = $request->search_xt;
        $data_s = hochieu::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 0)->take(10)->paginate(10);
        return view('admin.search_xt',['data_s'=>$data_s]);
    }
    public function get_search_xd(){
        return view('admin.404');
    }
    public function post_search_xd(Request $request){
        $tukhoa = $request->search_xt;
        $data_s = hochieu::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 1)->take(10)->paginate(10);
        return view('admin.search_xd',['data_s'=>$data_s]);
    }
    public function get_search_lt(){
        return view('admin.404');
    }
    public function post_search_lt(Request $request){
        $tukhoa = $request->search_xt;
        $data_s = hochieu::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 2)->take(10)->paginate(10);
        return view('admin.search_lt',['data_s'=>$data_s]);
    }
    public function get_search_gs(){
        return view('admin.404');
    }
    public function post_search_gs(Request $request){
        $tukhoa = $request->search_xt;
        $data_s = nhatky::where('id_hochieu','like',"%$tukhoa%")->take(10)->paginate(10);
        return view('admin.search_gs',['data_s'=>$data_s]);
    }
    public function get_log_xt(){
        return view('admin.404');
    }
    public function post_log_xt(Request $request){
        dd($request->all());
        $tukhoa = $request->search_xt;
        $data_s_xt = nhatky::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 1)->take(10)->paginate(10);
        return view('admin.s_log_xt',['data_s_xt'=>$data_s_xt]);
    }
    public function get_log_xd(){
        return view('admin.404');
    }
    public function post_log_xd(Request $request){
        $tukhoa = $request->search_xt;
        $data_s_xd = nhatky::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 2)->take(10)->paginate(10);
        return view('admin.s_log_xd',['data_s_xd'=>$data_s_xd]);
    }
    public function get_log_lt(){
        return view('admin.404');
    }
    public function post_log_lt(Request $request){
        $tukhoa = $request->search_xt;
        $data_s_lt = nhatky::where('id_hochieu','like',"%$tukhoa%")->where('tinhtrang', 3)->take(10)->paginate(10);
        return view('admin.s_log_lt',['data_s_lt'=>$data_s_lt]);
    }
}
