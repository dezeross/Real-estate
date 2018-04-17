<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
class ajaxController extends Controller
{
    public function district_ward($ajax){
    	$districtid = $ajax;
    	$arr = DB::table("ward")->where("districtid","=",$districtid)->get();
      $pro = DB::table("tbl_project")->where("districtid","=",$districtid)->get();
      echo "<div class='form-group' style='padding: 5px'><div class='row'><div class='col-md-2'>Phường/xã</div><div class='col-md-10'><select name='wardid' id='wardid' class='btn-info' onchange=''>";
      foreach ($arr as $rows) {
        echo "<option value=".$rows->wardid.">".$rows->name."</option>";
              
      }
        echo    "</select></div></div></div>";
     
        echo "<div class='form-group' style='padding: 5px'><div class='row'><div class='col-md-2'>Dự Án</div><div class='col-md-10'><select name='pk_project_id' id='pk_project_id' class='btn-info' onchange=''><option value='0'>-KXĐ-</option>";
      foreach ($pro as $rows) {
        echo "<option value=".$rows->pk_project_id.">".$rows->c_name."</option>";
              
      }
        echo    "</select></div></div></div>";
    }
    public function search($id,$keyword){
        $keyword = "%".$keyword."%";
        switch ($id) {
            case 1:
                $arr = DB::table("tbl_estate")->where("c_name","like",$keyword)->get();
                if (!isset($arr->pk_estate_id)) {
                    echo "<b style='color:red;'>No Exist !</b>";
                }
                foreach ($arr as $rows) {
                   echo "<tr>";
                   echo "<td>".$rows->c_name."</td>";
                   $cate = DB::table("tbl_loai")->where("pk_loai_id","=",$rows->fk_loai_id)->first();
                   echo "<td>".$cate->c_name."</td>";
                   $district = DB::table("district")->where("districtid","=",$rows->districtid)->first();
                   echo "<td>".$district->name."</td>";
                   echo "<td>".$rows->dientich."</td>";
                   echo "<td>".$rows->c_price."</td>";
                   $edit = url("admin/product-estate?act=edit&id=".$rows->pk_estate_id);
                   $delete = url("admin/product-estate?act=delete&id=".$rows->pk_estate_id);
                   echo "<td><a href=".$edit.">Edit</a>&nbsp;"."<a href=".$delete.">Delete</a></td>";
                   echo "</tr>";
                }
                break;
            case 2:
                $project = DB::table("tbl_project")->where("c_name","like","$keyword")->first();
                if (!isset($project->pk_project_id)) {
                    echo "<b style='color:red;'>No Exist !</b>";
                }else{
                  $arr = DB::table("tbl_estate")->where("projectid","=",$project->pk_project_id)->get();
                  foreach ($arr as $rows) {
                     echo "<tr>";
                     echo "<td>".$rows->c_name."</td>";
                     $cate = DB::table("tbl_loai")->where("pk_loai_id","=",$rows->fk_loai_id)->first();
                     echo "<td>".$cate->c_name."</td>";
                     $district = DB::table("district")->where("districtid","=",$rows->districtid)->first();
                     echo "<td>".$district->name."</td>";
                     echo "<td>".$rows->dientich."</td>";
                     echo "<td>".$rows->c_price."</td>";
                     $edit = url("admin/product-estate?act=edit&id=".$rows->pk_estate_id);
                     $delete = url("admin/product-estate?act=delete&id=".$rows->pk_estate_id);
                     echo "<td><a href=".$edit.">Edit</a>&nbsp;"."<a href=".$delete.">Delete</a></td>";
                     echo "</tr>";
                }
                }
                
                break;
            case 3:
                $district=DB::table("district")->where("name","like",$keyword)->first();
                $arr = DB::table("tbl_estate")->where("districtid","=",$district->districtid)->get();
                foreach ($arr as $rows) {
                  echo "<tr>";
                    echo "<td>".$rows->c_name."</td>";
                   $cate = DB::table("tbl_loai")->where("pk_loai_id","=",$rows->fk_loai_id)->first();
                   echo "<td>".$cate->c_name."</td>";
                   echo "<td>".$district->name."</td>";
                   echo "<td>".$rows->dientich."</td>";
                   echo "<td>".number_format($rows->c_price)."</td>";
                   $edit = url("admin/product-estate?act=edit&id=".$rows->pk_estate_id);
                   $delete = url("admin/product-estate?act=delete&id=".$rows->pk_estate_id);
                   echo "<td><a href=".$edit.">Edit</a>&nbsp;"."<a href=".$delete.">Delete</a></td>";
                   echo "</tr>";
                }
                break;
        }

    }
    public function choose($id){
    	$category="";
    	if ($id==1) {
    		$category="ten";
    		echo "<strong>Tìm kiếm theo tên * Ex </strong : <i>Căn hộ cao cấp Hồ Tây</i>";
    	}if ($id==2) {
    		$category="du an";
    		echo "<strong>Tìm kiếm theo dự án * Ex </strong : <i>River side</i>";
    	}if ($id==3) {
    		$category="quan huyen";
    		echo "<strong>Tìm kiếm theo quận huyện * Ex </strong : <i>Hoàn Kiếm</i>";
    	}
    }
    public function element($id,$key){
    	if ($key!="") {
            $key="%".$key."%";
            echo "<ul class='list-unstyled ' style='padding:5px;line-height:30px'>";
            if ($id==1) {
                $arr = DB::table("tbl_estate")->where("c_name","like",$key)->get();
                foreach ($arr as $rows) {
                echo "<li class='document' style='cursor:help;border-bottom:1px solid white;background:#1abc9c;color:white;font-style:normal'>".$rows->c_name."</li>";}}
            if ($id==2) {
                $arr = DB::table("tbl_project")->where("c_name","like",$key)->get();
                foreach ($arr as $rows) {
                echo "<li class='document' style='cursor:help;border-bottom:1px solid white;background:#1abc9c;color:white;font-style:normal'>".$rows->c_name."</li>";}
            }
            if ($id==3) {
                $arr = DB::table("district")->where("name","like",$key)->get();

                foreach ($arr as $rows) {
                echo "<li class='document' style='cursor:help;border-bottom:1px solid white;background:#1abc9c;color:white;font-style:normal'>".$rows->name."</li>";
    		}
           }
    	   echo "</ul>";
    }
  }
  public function delete_img($c_name){  
    $fk_estate_id = DB::table("tbl_img")->where("c_name","=",$c_name)->first();
    DB::table("tbl_img")->where("c_name","=",$c_name)->delete();
    $img = DB::table("tbl_img")->where("fk_estate_id","=",$fk_estate_id->fk_estate_id)->get();
    File::delete('public/upload/product/'.$c_name);
    foreach ($img as $i) {
        echo "<i style='color: red;'' class='fa fa-times' aria-hidden='true'></i>";
        echo "<img src=".asset('public/upload/product/'.$i->c_name)." width='150px' id='img-product' data-toggle='tooltip' data-placement='bottom' title='Bạn có muốn xóa file !'>";
    }
  }
  public function list_project($districtid){
    $arr  = DB::table("tbl_project")->where("districtid","=",$districtid)->get();
    foreach ($arr as $rows) {
      echo "<tr>";
      if ($rows->c_img!="") {
        echo "<td><img src=".asset('public/upload/project/'.$rows->c_img)." width='60px' alt=''></td>";
      }else echo "<td></td>";
      echo "<td>".$rows->c_name."</td>";
      if ($rows->c_hotproject==1) {
      echo "<td><span class='glyphicon glyphicon-check'></span></td>";
      }else echo "<td></td>";
      $edit = url("admin/du-an-hot?act=edit&id=".$rows->pk_project_id);
      $delete = url("admin/du-an-hot?act=delete&id=".$rows->pk_project_id);
      echo "<td><a href=".$edit.">Edit</a>&nbsp;"."<a href=".$delete.">Delete</a></td>";
     echo "</tr>";
    }
  }
}
