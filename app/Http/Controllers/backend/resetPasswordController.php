<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Hash;
class resetPasswordController extends Controller
{
    public function view_reset(){
    	return view("backend/reset_password");
    }
    public function send_key(Request $request){
    	$email = $request->email;
    	$e = "%".$email."%";
    	$user = DB::table("users")->where("email","like",$e)->first();
        // echo $e;
    	if (isset($user->id)) {
    		$key = str_random(30);
    		$u = DB::table("reset_password")->where("c_email","like",$e)->first();
    		if (isset($u->c_email)) {
    			DB::table("reset_password")->where("c_email","like",$e)->update(array("c_key"=>$key));
    		}else{
    			DB::table("reset_password")->insert(array("c_email"=>$email,"c_key"=>$key));
    		}
    		$data["key"] = $key;
    		Mail::send('mail.reset_password',$data,function($mgs) use($email){
    		$mgs->from("duongdiemdy@gmail.com","Dezeros");
    		$mgs->to($email,"GEO-Estate")->subject("GEO-Estate");
    	});
    		$arr["email_1"] = $email;
    		return view("backend/get_key",$arr);
    	}else{
    		$data["email"] = $email;
    		return view("backend/reset_password",$data);
    	}

    }
    public function compare_key(Request $request){
    		$email = $request->email;
    		$e = "%".$email."%";
    		$key  =$request->key;
    		$user = DB::table("reset_password")->where("c_email","like",$e)->first();
    		if (isset($user->c_email)&&$user->c_key==$key) {
    			$data["email_1"] = $email;
    			return view("backend/create_password",$data);
    		}else{
    			$arr["email_1"] = $email;
    			$arr["info"] = "keycode không đúng ";
    			return view("backend/get_key",$arr);
    		}
    }
    public function reset(Request $request){
    	$email = $request->email;
    	$e = "%".$email."%";
    	$password = Hash::make($request->password);

    	DB::table("users")->where("email","like",$e)->update(array("password"=>$password));
    	DB::table("reset_password")->where("c_email","like",$e)->delete();
    	return redirect(url('/login'));
    }
}
