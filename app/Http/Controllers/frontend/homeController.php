<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\str;
class homeController extends Controller
{
    public function home(){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$tip = DB::table("tbl_IP")->get();
        $dem=0;
    	foreach ($tip as $i) {
    		if ($ip==$i->IP){
    		  $dem=1;
    		}
    	}
        if ($dem!=1) {
            DB::table("tbl_IP")->insert(array("IP"=>$ip,"visit"=>date("Y/m/d")));
        }
    	$data["est"] = DB::table("tbl_estate")->take(11)->get();
    	$data["dis"] = DB::table("district")->get();
    	$data["ht"] = DB::table("tbl_hinhthuc")->get();
        $data["huongnha"] = DB::table("tbl_huong")->get();
        $data["loai"] = DB::table("tbl_loai")->get();
    	$data["str"] = new str();
        $data["project"] = DB::table("tbl_project")->where("c_hotproject","=",1)->get();
    	return view("frontend/home",$data);
    }
}
