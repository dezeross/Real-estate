<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
class projectController extends Controller
{
   public function list_hot(){
   	$data["district"] = DB::table("district")->get();
   	$data["p"] = DB::table("tbl_project")->where("districtid","=",1)->get();
   	return view("backend/list_project",$data);
   }
   public function edit_project(Request $request){
   		$id = $request->get("id");
   		if ($request->hasFile("c_img")) {
   			$c_img_old = DB::table("tbl_project")->where("pk_project_id","=",$id)->first();
    			if (File::exists("public/upload/project/".$c_img_old->c_img)) {
    				File::delete("public/upload/project/".$c_img_old->c_img);
    			}
    			$img = $request->c_img;
    			$img_name =str_random(30).'-'.$img->getClientOriginalName();
    			$img->move("public/upload/project",$img_name);
    			DB::table("tbl_project")->where("pk_project_id","=",$id)->update(array("c_img"=>$img_name));
   		}
   		$c_hotproject = $request->c_hotproject;
   		$c_hotproject = $c_hotproject=="on"?1:0;
   		DB::table("tbl_project")->where("pk_project_id","=",$id)->update(array("c_hotproject"=>$c_hotproject));
   		return redirect(url("admin/du-an-hot"));
   }
   public function delete_hot($id){
   		DB::table("tbl_project")->where("pk_project_id","=",$id)->update(array("c_hotproject"=>0));
   }
}
