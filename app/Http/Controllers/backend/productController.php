<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
class productController extends Controller
{
    public function list_product(){
    	$data['arr'] = DB::table('tbl_estate')->orderBy('pk_estate_id',"desc")->paginate(15);
    	return view('backend/list_product',$data);
    }
   
    public function add_edit_product(Request $request){
    	$act = $request->get('act');
        $filename = $request->file("c_img");
    	switch ($act) {
    		case 'edit':
                $pk_project_id = $request->pk_project_id;
    			$id = $request->get('id');
    			$name = $request->name;
    			$fk_hinhthuc_id = $request->fk_hinhthuc_id;
    			$fk_loai_id = $request->fk_loai_id;
    			$districtid = $request->districtid;
    			$wardid = $request->wardid;
    			$dientich = $request->dientich;
    			$c_price = $request->c_price;
    			$c_description = $request->c_description;
    			$mattien = $request->mattien;
    			$duongvao = $request->duongvao;
    			$huongbancongid = $request->huongbancongid;
    			$huongnhaid = $request->huongnhaid;
    			$sotang = $request->sotang;
    			$c_gara = $request->c_gara;
    			$phongtam = $request->phongtam;
    			$phongngu = $request->phongngu;
    			$noithat = $request->noithat;
                // imgage
                if (!is_null($filename)) {

                    foreach ($filename as $img) {
                        $img_name =str_random(30) . '-'.$img->getClientOriginalName();
                        DB::table("tbl_img")->insert(array("c_name"=>$img_name,"fk_estate_id"=>$id));
                        $img->move("public/upload/product",$img_name);
                    }
                }

                // end
    			DB::table('tbl_estate')->where('pk_estate_id','=',$id)->update(array(
    				"c_name"=>$name,
    				"fk_hinhthuc_id"=>$fk_hinhthuc_id,
    				"fk_loai_id"=>$fk_loai_id,
    				"districtid"=>$districtid,
    				"wardid"=>$wardid,
    				"dientich"=>$dientich,
    				"c_price"=>$c_price,
    				"c_description"=>$c_description,
    				"mattien"=>$mattien,
    				"duongvao"=>$duongvao,
    				"huongbancongid"=>$huongbancongid,
    				"huongnhaid"=>$huongnhaid,
    				"sotang"=>$sotang,
    				"c_gara"=>$c_gara,
    				"phongngu"=>$phongngu,
    				"phongtam"=>$phongtam,
    				"noithat"=>$noithat,
                    "projectid"=>$pk_project_id
    			));
    			return redirect(url('admin/product-estate'));
    			break;
    	case 'add':
    			$name = $request->name;
    			$fk_hinhthuc_id = $request->fk_hinhthuc_id;
    			$fk_loai_id = $request->fk_loai_id;
    			$districtid = $request->districtid;
    			$wardid = $request->wardid;
    			$dientich = $request->dientich;
    			$c_price = $request->c_price;
    			$c_description = $request->c_description;
    			$mattien = $request->mattien;
    			$duongvao = $request->duongvao;
    			$huongbancongid = $request->huongbancongid;
    			$huongnhaid = $request->huongnhaid;
    			$sotang = $request->sotang;
    			$c_gara = $request->c_gara;
    			$phongtam = $request->phongtam;
    			$phongngu = $request->phongngu;
    			$noithat = $request->noithat;
    			$projectid=isset($request->pk_project_id)?$request->pk_project_id:1;;
                // images
                
                // end
    			DB::table('tbl_estate')->insert(array(
    				"c_name"=>$name,
    				"projectid"=>$projectid,
    				"streetid"=>1,
    				"fk_hinhthuc_id"=>$fk_hinhthuc_id,
    				"fk_loai_id"=>$fk_loai_id,
    				"districtid"=>$districtid,
    				"wardid"=>$wardid,
    				"dientich"=>$dientich,
    				"c_price"=>$c_price,
    				"c_description"=>$c_description,
    				"mattien"=>$mattien,
    				"duongvao"=>$duongvao,
    				"huongbancongid"=>$huongbancongid,
    				"huongnhaid"=>$huongnhaid,
    				"sotang"=>$sotang,
    				"c_gara"=>$c_gara,
    				"phongngu"=>$phongngu,
    				"phongtam"=>$phongtam,
    				"noithat"=>$noithat
    			));
                $fk_estate_id = DB::table("tbl_estate")->orderBy("pk_estate_id","desc")->first();
                if (!is_null($filename)) {   
                    foreach ($filename as $img) {
                        $img_name =str_random(30) . '-'.$img->getClientOriginalName();
                        DB::table("tbl_img")->insert(array("c_name"=>$img_name,"fk_estate_id"=>$fk_estate_id->pk_estate_id));
                    $img->move("public/upload/product/",$img_name);
                    }
                }
    			return redirect(url('admin/product-estate'));
    		break;
    	}
    }
    public function delete($id){
    	DB::table('tbl_estate')->where("pk_estate_id","=",$id)->delete();
        $img = DB::table("tbl_img")->where("fk_estate_id","=",$id)->get();
        foreach ($img as $i) {
            File::delete("public/upload/product/".$i->c_name);
        }

        DB::table('tbl_img')->where("fk_estate_id","=",$id)->delete();
    	return redirect(url("admin/product-estate"));
    }
    public function view_search(){
    	return view('backend/search');
    }
    
}
