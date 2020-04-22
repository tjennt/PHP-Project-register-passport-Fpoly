<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\hochieu;
use Carbon\Carbon;

class check_date extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = Carbon::now();
        $check_stt = hochieu::all();
        foreach($check_stt as $stt){
            if($stt['tinhtrang'] == 3){
                $email = $stt['email'];
                $data = array('email'=>$email);
                Mail::send('resident.mail_check',$data,function($message) use ($data){
                $message->from('huuloihuynh1610@gmail.com','Passport');
                $message->to($data['email'])->subject('Hộ chiếu của bạn đã được xác nhận');
                });
                $update_stt = hochieu::where(['id_hochieu'=>$stt['id_hochieu'],'tinhtrang'=>3])->update(['tinhtrang'=>4]);
            }
            if($stt['tinhtrang'] == 5){
                $data1 = array('email'=>$stt['email'],'id_hochieu'=>$stt['id_hochieu'],'hoten'=>$stt['hoten'],'cmnd'=>$stt['cmnd'],'ngaycap'=>$stt['ngaycap'],'note'=>$stt['note_error']);
                Mail::send('resident.mail_check_error',$data1,function($message) use ($data1){
                    $message->from('huuloihuynh1610@gmail.com','Passport');
                    $message->to($data1['email'])->subject('Hộ chiếu của bạn đã bị hủy do sai thông tin');
                });
                // $update_stt1 = hochieu::where(['id_hochieu'=>$stt['id_hochieu'],'tinhtrang'=>5])->update(['tinhtrang'=>6]);
                $update_stt1 = hochieu::where(['id_hochieu'=>$stt['id_hochieu'],'tinhtrang'=>5])->delete();
            }
            if($now->diffInDays($stt['hansudung']) == 0 && $stt->tinhtranghsd == 0 && $stt->tinhtrang == 4){
                $tm = Carbon::now();
                $code = bcrypt(md5(time().$stt['email']));

                $url = URL::temporarySignedRoute('get.link.extension', now()->addMinutes(2), ['code'=>$code,'email'=>$stt['email']]);
                $sv = hochieu::where('id_hochieu',$stt['id_hochieu'])->update(['timecode'=>$tm,'checkcode'=>$code]);
                $data1 = array('email'=>$stt['email'],'url'=>$url);
                Mail::send('resident.extension',$data1,function($message) use ($data1){
                    $message->from('huuloihuynh1610@gmail.com','Passport');
                    $message->to($data1['email'])->subject('Hộ chiếu của bạn đã hết hạn, bạn có muốn gia hạn?');
                });
                hochieu::where('id_hochieu',$stt['id_hochieu'])->update(['tinhtranghsd'=>1]);
               
            }
            if($now->diffInMinutes($stt['hansudung']) > 5 && $stt->tinhtranghsd == 1 && $stt->tinhtrang == 4){
                $tm = Carbon::now();
                $code = bcrypt(md5(time().$stt['email']));
                hochieu::where('id_hochieu',$stt['id_hochieu'])->update(['checkcode'=>$code]);
            }
        }
    }
}
