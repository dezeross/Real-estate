<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class hinhthucController extends Controller
{
    public function list_hinhthuc(){
    	$data["arr"] = DB::table('tbl_hinhthuc')->orderBy('pk_hinhthuc_id',"desc")->paginate(15);
    	return view('backend/list_hinhthuc',$data);
    }
    public function add_edit_hinhthuc(Request $request){
  	$act = $request->get('act');
  	switch ($act) {
  		case 'edit':
  			$id = $request->get('id');
  			$name = $request->name;
  			DB::table('tbl_hinhthuc')->where('pk_hinhthuc_id','=',$id)->update(array("c_name"=>$name));
  			return redirect(url('admin/hinhthuc'));
  			break;
  		
  		case 'add':
  			$name = $request->name;
  			DB::table('tbl_hinhthuc')->insert(array("c_name"=>$name));
  			return redirect(url('admin/hinhthuc'));
  			break;
  	}
  }
  public function delete($id){
  	DB::table('tbl_hinhthuc')->where("pk_hinhthuc_id","=",$id)->delete();
  	return redirect(url("admin/hinhthuc"));
  }
}
