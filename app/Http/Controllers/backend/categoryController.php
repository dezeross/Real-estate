<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class categoryController extends Controller
{
    public function list_loai_nha_dat(){
    	$data["arr"] = DB::table("tbl_loai")->orderBy("pk_loai_id","desc")->paginate(15);
    	return view('backend/list_loai_nha_dat',$data);
    }
    public function add_edit_category(Request $request){
  	$act = $request->get('act');
  	switch ($act) {
  		case 'edit':
  			$id = $request->get('id');
  			$name = $request->name;
  			DB::table('tbl_loai')->where('pk_loai_id','=',$id)->update(array("c_name"=>$name));
  			return redirect(url('admin/loai-nha-dat'));
  			break;
  		
  		case 'add':
  			$name = $request->name;
  			DB::table('tbl_loai')->insert(array("c_name"=>$name));
  			return redirect(url('admin/loai-nha-dat'));
  			break;
  	}
  }
  public function delete($id){
  	DB::table('tbl_loai')->where("pk_loai_id","=",$id)->delete();
  	return redirect(url("admin/loai-nha-dat"));
  }
}





