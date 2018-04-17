<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\str;
use Session;
class detailController extends Controller
{
    public function view_detail($id,$name){
    	$data["est"] = DB::table("tbl_estate")->where("pk_estate_id","=",$id)->first();
    	$data["img"] = DB::table("tbl_img")->where("fk_estate_id","=",$id)->get();
    	$data["user"] = DB::table("tbl_nhanvien")->orderBy("pk_nhanvien_id","desc")->first();
    	$data["district"] = DB::table("district")->get();
    	$data["hinhthuc"] = DB::table("tbl_hinhthuc")->get();
    	$data["str"] = new str();
    	return view('frontend/view_detail',$data);
    }
}
