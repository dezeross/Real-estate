<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ajaxController extends Controller
{
    public function view_project($districtid){
    	$project = DB::table("tbl_project")->where("districtid","=",$districtid)->get();
    	echo "<label for=''>Dự án</label><select name='project'  id='lunchBegins' class='selectpicker form-control' data-live-search='true' data-live-search-style='begins' title='Chọn Dự án theo Quận Huyện'><option value='0'>Chọn dự án</option>";
		foreach ($project as $rows) {
    		echo "<option style='color:black' value=".$rows->pk_project_id.">".$rows->c_name."</option>";
    	}
    	echo "</select>";
    }
}
