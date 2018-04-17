<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
class nhanvienController extends Controller
{
    public function list_nhanvien(){
    	$data["arr"]  = DB::table("tbl_nhanvien")->paginate(15);
    	return view("backend/list_nhanvien",$data);
    }
    public function add_edit_nhanvien(Request $request){
    	$act = $request->get('act');
    	
    	switch ($act) {
    		case 'edit':
    			$id = $request->get("id");
    			$c_name = $request->c_name;
    			$c_phone = $request->c_phone;
    			$c_address = $request->c_address;
    		if ($request->hasFile("c_img")) {
    			$c_img_old = DB::table("tbl_nhanvien")->where("pk_nhanvien_id","=",$id)->first();
    			if (File::exists("public/upload/user/".$c_img_old->c_img)) {
    				File::delete("public/upload/user/".$c_img_old->c_img);
    			}
    			$img = $request->c_img;
    			$img_name =str_random(30).'-'.$img->getClientOriginalName();
    			$img->move("public/upload/user",$img_name);
    			DB::table("tbl_nhanvien")->where("pk_nhanvien_id","=",$id)->update(array("c_img"=>$img_name));
    		}
    			DB::table("tbl_nhanvien")->where("pk_nhanvien_id","=",$id)->update(array("c_name"=>$c_name,"c_phone"=>$c_phone,"c_address"=>$c_address));
    			return redirect(url("admin/nhan-vien-tu-van"));
    			break;
    		
    		case 'add':
    				$c_email = $request->c_email;
    				$c_name = $request->c_name;
	    			$c_phone = $request->c_phone;
	    			$c_address = $request->c_address;
	    			$img = $request->c_img;
	    			$img_name =str_random(30).'-'.$img->getClientOriginalName();
	    			$img->move("public/upload/user",$img_name);
	    			DB::table("tbl_nhanvien")->insert(array("c_email"=>$c_email,"c_name"=>$c_name,"c_phone"=>$c_phone,"c_img"=>$img_name,"c_address"=>$c_address));
	    			return redirect(url('admin/nhan-vien-tu-van'));
    			break;
    	}
    }
    public function delete_nhanvien($id){
    	$c_img_old = DB::table("tbl_nhanvien")->where("pk_nhanvien_id","=",$id)->first();
    	if (File::exists("public/upload/user/".$c_img_old->c_img)) {
    		File::delete("public/upload/user/".$c_img_old->c_img);
    	}
    	DB::table("tbl_nhanvien")->where("pk_nhanvien_id","=",$id)->delete();
    	return redirect(url('admin/nhan-vien-tu-van'));
    }
}
