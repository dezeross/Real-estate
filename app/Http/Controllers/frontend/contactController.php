<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
class contactController extends Controller
{   
    public function view_contact(){
    	return view("frontend/view_contact");
    }
    public function send_mail(Request $request){
    	$m = (String)$request->message;
    	$data=["email"=>$request->email,"m"=>$m,"number_phone"=>$request->number_phone,"name"=>$request->name,"address"=>$request->address];
    	Mail::send('mail.send',$data,function($mgs){
    		$mgs->from("duongdiemdy@gmail.com","Duong Vu");
    		$mgs->to("toilaai0965@gmail.com","Duong Vu")->subject("Phản hồi customer từ website");
    	});
        $email_customer = $request->email;
    	Mail::send('mail.send_to_customer',$data,function($mgs) use($email_customer){
    		$mgs->from("duongdiemdy@gmail.com","GEO-Estate");
    		$mgs->to($email_customer,"GEO-Estate")->subject("GEO-Estate");
    	});
        return view("mail/send_to_victory",$data);
    }
    public function subscribe(Request $request){
        $data["email"] = $request->email;
        $email_customer = $request->email;
        Mail::send('mail.send_to_customer',$data,function($mgs) use($email_customer){
            $mgs->from("duongdiemdy@gmail.com","GEO-Estate");
            $mgs->to($email_customer,"GEO-Estate")->subject("GEO-Estate");
        });
        return view("mail/send_to_victory",$data);
    }
}
