<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class userController extends Controller
{
  public function list_user(){
  	$data["arr"] = DB::table("users")->orderBy("id","desc")->paginate(15);
  	return view('backend/list_user',$data);
  }
  public function add_edit_user(Request $request){
  	$act = $request->get('act');
  	switch ($act) {
  		case 'edit':
  			$id = $request->get('id');
  			$name = $request->name;
  			$password = Hash::make($request->password);
  			DB::table('users')->where('id','=',$id)->update(array("name"=>$name));
  			if ($password!="") {
  			DB::table('users')->where('id','=',$id)->update(array("password"=>$password));
  			}
        return redirect(url('/admin/user'));
  			break;
  		
  		case 'add':
      
  			$email = $request->email;
  			$name = $request->name;
  			$password = Hash::make($request->password);
  			DB::table('users')->insert(array("name"=>$name,"email"=>$email,"password"=>$password));
  			return redirect(url('admin/user'));
  			break;
  	}
  }
  public function delete($id){
  	DB::table('users')->where("id","=",$id)->delete();
  	return redirect(url("admin/user"));
  }
}
