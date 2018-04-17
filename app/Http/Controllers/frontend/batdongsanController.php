<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\str;
class batdongsanController extends Controller
{
    public function view_batdongsan(){
    	$data["est"] = DB::table("tbl_estate")->orderBy('pk_estate_id','desc')->paginate(15);
    	$data["str"] = new str();
        $data["info"] = "Bất động sản mới";
    	return view("frontend/estate",$data);
    }
    public function view_cdn_desc(){
        $data["est"] = DB::table("tbl_estate")->orderBy('c_price','desc')->paginate(15);
        $data["str"] = new str();
        $data["info_c"] = "ắp xếp theo chiều giảm dần của giá thành";
        return view("frontend/estate",$data);
    }
    public function view_cdn_asc(){
        $data["est"] = DB::table("tbl_estate")->orderBy('c_price','asc')->paginate(15);
        $data["str"] = new str();
        $data["info_c"] = "ắp xếp theo chiều tăng dần của giá thành";
        return view("frontend/estate",$data);
    }
    public function viewofcategory($name){
         $data["name"] = $name;
        $str = new str();
        $name = $str->url_decode($name);
        $name = "%".$name."%";
        $loai = DB::table("tbl_loai")->where("c_name","like",$name)->first();
            $data["loai_bds"] = $loai;
            $data["est"] = DB::table("tbl_estate")->where("fk_loai_id","=",$loai->pk_loai_id)->orderBy("pk_estate_id","desc")->paginate(15);
            $data["str"] = new str();
            $data["info"] = $loai->c_name." mới";
        
        return view("frontend/estate_category",$data);
    }
    public function viewofdesc($name){
         $data["name"] = $name;
        $str = new str();
        $name = $str->url_decode($name);
        $name = "%".$name."%";
        $loai = DB::table("tbl_loai")->where("c_name","like",$name)->first();
        $data["est"] = DB::table("tbl_estate")->where("fk_loai_id","=",$loai->pk_loai_id)->orderBy("c_price","desc")->paginate(15);
        $data["str"] = new str();
        $data["info"] = $loai->c_name." giá thành giảm";
        return view("frontend/estate_category",$data);
    }
    public function viewofasc($name){
        $data["name"] = $name;
        $str = new str();
        $name = $str->url_decode($name);
        $name = "%".$name."%";
        $loai = DB::table("tbl_loai")->where("c_name","like",$name)->first();
        $data["est"] = DB::table("tbl_estate")->where("fk_loai_id","=",$loai->pk_loai_id)->orderBy("c_price","asc")->paginate(15);
        $data["str"] = new str();
        $data["info"] = $loai->c_name." giá thành tăng";
        return view("frontend/estate_category",$data);
    }
    public function project_est($projectid,$project_name){
        $data["project"] = DB::table("tbl_project")->where("pk_project_id","=",$projectid)->first();
        $data["str"] = new str();
        $data["name"] = $project_name;
        $data["id"] = $projectid;
        $data["du_an"] = $data["project"]->c_name;
        if (stripos($project_name, "new")!="") {
            $data["est"] = DB::table("tbl_estate")->where("projectid","=",$projectid)->orderBy("pk_estate_id","desc")->paginate(15);
            $data["info"] = $data["project"]->c_name." mới ^_^";
        }elseif (stripos($project_name, "asc")!="") {
            $data["est"] = DB::table("tbl_estate")->where("projectid","=",$projectid)->orderBy("c_price","asc")->paginate(15);
            $data["info"] = $data["project"]->c_name." giá thành tăng >>";
        }else{
            $data["est"] = DB::table("tbl_estate")->where("projectid","=",$projectid)->orderBy("c_price","desc")->paginate(15);
            $data["info"] = $data["project"]->c_name." giá thành giảm <<";
        }
        return view("frontend/est_project",$data);
    }
}
