<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\str;
class searchController extends Controller
{
    public function search_home(Request $request){
    	$districtid = isset($request->districtid)?$request->districtid:0;
    	$fk_hinhthuc_id = isset($request->hinhthuc)?$request->hinhthuc:0;
    	$price_range =isset($request->price_range)?$request->price_range:0;
    	$dientich = isset($request->dientich)?$request->dientich:0;
    	$projectid = isset($request->project)?$request->project:0;
    	$fk_loai_id = isset($request->loai)?$request->loai:0;
    	$phongtam = isset($request->phongtam)?$request->phongtam:0;
    	$phongngu = isset($request->phongngu)?$request->phongngu:0;
    	$keyword = isset($request->keyword)?$request->keyword:"";
    	$keyword = "%".$keyword."%";
    	switch ($price_range) {
    		case 0 :$min_price=0;$max_price=0;	break;
    		case 1 :$min_price=0;$max_price=500*pow(10,6);	break;
    		case 2 :$min_price=500*pow(10,6);$max_price=800*pow(10,6);	break;
    		case 3 :$min_price=800*pow(10,6);$max_price=pow(10,9);	break;
    		case 4 :$min_price=pow(10,9);$max_price=2*pow(10,9); break;
    		case 5 :$min_price=2*pow(10,9);$max_price=3*pow(10,9); break;
    		case 6 :$min_price=3*pow(10,9);$max_price=5*pow(10,9);	break;
    		case 7 :$min_price=5*pow(10,9);$max_price=7*pow(10,9);	break;
    		case 8 :$min_price=7*pow(10,9);$max_price=10*pow(10,9);	break;
    		case 9 :$min_price=10*pow(10,9);$max_price=20*pow(10,9);	break;
    		case 10:$min_price=20*pow(10,9);$max_price=30*pow(10,9); break;
    		case 11:$min_price=30*pow(10,9); $max_price=1000*pow(10, 9); break;
    	}
    	switch ($dientich) {
    		case 0 : $min_dientich=0;$max_dientich=0;  break;
    		case 1 : $min_dientich=0;$max_dientich=30;  break;
    		case 2 : $min_dientich=30;$max_dientich=50;  break;
    		case 3 : $min_dientich=50;$max_dientich=80;  break;
    		case 4 : $min_dientich=80;$max_dientich=100;  break;
    		case 5 : $min_dientich=100;$max_dientich=150;  break;
    		case 6 : $min_dientich=150;$max_dientich=200;  break;
    		case 7 : $min_dientich=200;$max_dientich=250;  break;
    		case 8 : $min_dientich=250;$max_dientich=300;  break;
    		case 9 : $min_dientich=300;$max_dientich=500;  break;
    		case 10 : $min_dientich=500;$max_dientich=1000;  break;
    	}
    	$data["str"] = new str();
    	$data["est"] = DB::table("tbl_estate");
    	if ($districtid!=0) {
    		$data["est"] = $data["est"]->where("districtid","=",$districtid);
    	}
    	if ($fk_hinhthuc_id!=0) {
    		$data["est"] = $data["est"]->where("fk_hinhthuc_id","=",$fk_hinhthuc_id);
    	}
    	if ($price_range!=0) {
    		$data["est"] = $data["est"]->where("c_price",">=",$min_price)->where("c_price","<=",$max_price);
    	}
    	if ($dientich!=0) {
    		$data["est"] = $data["est"]->where("dientich",">=",$min_dientich)->where("dientich","<=",$max_dientich);
    	}
    	if ($phongngu!=0) {
    		$data["est"] = $data["est"]->where("phongngu","=",$phongngu);
    	}
    	if ($phongtam!=0) {
    		$data["est"] = $data["est"]->where("phongtam","=",$phongtam);
    	}
    	if ($projectid!=0) {
    		$data["est"] = $data["est"]->where("projectid","=",$projectid);
    	}
    	if ($fk_loai_id!=0) {
    		$data["est"] = $data["est"]->where("fk_loai_id","=",$fk_loai_id);
    	}
    	$data["est"] = $data["est"]->where("c_name","like",$keyword);
    	$data["est"] = $data["est"]->paginate(15);
    	
    	return view("frontend/search",$data);
    }
}

































// if ($dientich==0&&$price_range==0&&$phongngu==0&&$phongtam==0&&$projectid==0&&$fk_loai_id==0) {
//     		if ($districtid==0&&$fk_hinhthuc_id==0) {
//     			$data["est"] = DB::table("tbl_estate")->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     		}else{
//     			if ($districtid==0&&$fk_hinhthuc_id!=0) {
//     				$data["est"] = DB::table("tbl_estate")->where("fk_hinhthuc_id","=",$fk_hinhthuc_id)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     			}else{
//     				if ($districtid!=0&&$fk_hinhthuc_id==0) {
//     				$data["est"] = DB::table("tbl_estate")->where("districtid","=",$districtid)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     				}else{
//     				$data["est"] = DB::table("tbl_estate")->where("districtid","=",$districtid)->where("fk_hinhthuc_id","=",$fk_hinhthuc_id)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     				}
//     			}
//     		}
//     	}else{
//     		if ($dientich!=0&&$price_range==0&&$phongngu==0&&$phongtam==0&&$projectid==0&&$fk_loai_id==0) {
//     			if ($districtid==0&&$fk_hinhthuc_id==0) {
//     			$data["est"] = DB::table("tbl_estate")->where("c_name","like",$keyword)->where("dientich",">=",$min_dientich)->where("dientich","<=",$max_dientich)->orderBy("pk_estate_id","desc")->paginate(15);
//     		}else{
//     			if ($districtid==0&&$fk_hinhthuc_id!=0) {
//     				$data["est"] = DB::table("tbl_estate")->where("fk_hinhthuc_id","=",$fk_hinhthuc_id)->where("dientich",">=",$min_dientich)->where("dientich","<=",$max_dientich)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     			}else{
//     				if ($districtid!=0&&$fk_hinhthuc_id==0) {
//     				$data["est"] = DB::table("tbl_estate")->where("districtid","=",$districtid)->where("dientich",">=",$min_dientich)->where("dientich","<=",$max_dientich)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     				}else{
//     				$data["est"] = DB::table("tbl_estate")->where("districtid","=",$districtid)->where("dientich",">=",$min_dientich)->where("dientich","<=",$max_dientich)->where("fk_hinhthuc_id","=",$fk_hinhthuc_id)->where("c_name","like",$keyword)->orderBy("pk_estate_id","desc")->paginate(15);
//     				}
//     			}
//     		}
//     		}
//     	}
