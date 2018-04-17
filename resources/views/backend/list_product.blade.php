@extends('backend.layout')
@section('controller')
<?php 
	$act = Request::get('act');
	switch ($act) {
		case 'edit':
			$id = Request::get('id');
			$form_control = url('admin/product-estate?act=edit&id='.$id);
			$p = DB::table('tbl_estate')->where('pk_estate_id','=',$id)->first();
			break;
		case 'add':
			$form_control = url('admin/product-estate?act=add');
			break;
	}
 ?>
 @if($act=='edit' || $act=='add')
 <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="font-weight: bold;" class="modal-title">
        <i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp
        {{ isset($act)&&$act=='edit'?'Edit ESTATE':'Add ESTATE' }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $form_control }}" method="post"  enctype="multipart/form-data">
        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="{{ isset($p->c_name)?$p->c_name:'' }}" name="name" class="form-control" required="">
					</div>
				</div>
			</div>
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Hinh thuc</div>
          <div class="col-md-10">
            <select name="fk_hinhthuc_id" id="" class="btn-info">
              <?php $ht = DB::table("tbl_hinhthuc")->get(); ?>
              <?php foreach ($ht as $h): ?>
                <option class="bg-primary" value="{{ $h->pk_hinhthuc_id }}" @if(isset($p->fk_hinhthuc_id)&&$h->pk_hinhthuc_id==$p->fk_hinhthuc_id) selected @endif>{{ $h->c_name }}</option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group" style="padding: 5px">
        <div id="hinhthuc_id"></div>
        <div class="row">
          <div class="col-md-2">Category</div>
          <div class="col-md-10">
            <select name="fk_loai_id" id="" class="btn-info">
              <?php $cate = DB::table("tbl_loai")->get();
               ?>
              @if(true)
              <?php foreach ($cate as $c): ?>
                <option class="bg-primary" value="{{ $c->pk_loai_id }}" @if(isset($p->fk_loai_id)&&$c->pk_loai_id==$p->fk_loai_id) selected @endif>{{ $c->c_name }}</option>
              <?php endforeach ?>
              @endif
            </select>
          </div>
        </div>
      </div>
<!--  -->
<!-- District -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Quận/Huyện </div>
          <div class="col-md-10">
            <select name="districtid" id="districtid" class="btn-info" onchange="showUser(this.value)">
              <?php $dis = DB::table("district")->get();
               ?>
              @if(true)
              <?php foreach ($dis as $c): ?>
                <option class="bg-primary" value="{{ $c->districtid}}" @if(isset($p->districtid)&&$c->districtid==$p->districtid) selected @endif>{{ $c->name }}</option>
              <?php endforeach ?>
              @endif
            </select>
          </div>
        </div>
      </div>
<!-- END -->

<!-- Ward -->
      <div id="ajax">
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Phường/Xã</div>
          
          <div class="col-md-10">
            <div id="123"> </div>
            <select name="wardid" id="wardid" class="btn-info">
              <?php 
                  if(isset($p->districtid)){
                  $districtid1 = $p->districtid;
                  $war = DB::table("ward")->where("districtid","=",$districtid1)->get();}else{
                    $war = DB::table("ward")->get();
                  }
               ?>
              <?php foreach ($war as $c): ?>
                <option class="bg-primary" value="{{ $c->wardid}}" @if(isset($p->wardid)&&$c->wardid==$p->wardid) selected @endif>{{ $c->type." ".$c->name }}</option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
<!-- END -->
<!-- Project -->
<div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Dự Án</div>
          <div class="col-md-10">
            <select name="pk_project_id" id="pk_project_id" class="btn-info" onchange="">
              <?php 
              $districtid = isset($p->districtid)?$p->districtid:1;
              $project = DB::table("tbl_project")->where("districtid","=",$districtid)->get(); ?>
              <option value="0">-KXĐ-</option>
              <?php foreach ($project as $rows): ?>
                <option value="{{ $rows->pk_project_id }}" @if(isset($p->projectid)&&$p->projectid==$rows->pk_project_id) selected @endif  >{{ $rows->c_name }}</option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
      </div>
<!-- Project -->
<!-- ajax ward -->
          <script type="text/javascript">
              var base_url = "http://localhost/php24_project/admin/";
              function showUser(str) {
               $.ajax({
                 url: base_url+'product-estate/choose/'+str,
                 type: 'get',
                 dataType: 'html',
                 data: {'id': str},
                 success:function(html){
                  $("#ajax").html(html);
                 }
               })
               
              }
            
          </script>
          <!-- end ajax -->
<!-- Areage -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Diện tích (m<sup>2</sup>)</div>
          <div class="col-md-10">
            <input type="number" value="{{ isset($p->dientich)?$p->dientich:'' }}" required name="dientich" class="form-control">
          </div>
        </div>
      </div>
<!-- END -->
<!-- Price -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Giá thành (VND)</div>
          <div class="col-md-10">
            <input type="number" onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)" value="{{ isset($p->c_price)?$p->c_price:'' }}" required name="c_price" class="form-control">
          </div>
        </div>
      </div>
<!-- END -->
<!-- Description -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Mô tả</div>
          <div class="col-md-10">
            <textarea name="c_description" >
              {{ isset($p->c_description)?$p->c_description:'' }}
            </textarea>
            <script>CKEDITOR.replace('c_description');</script>
          </div>
        </div>
      </div>
<!-- END -->
<!-- MT_HV -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Mặt tiền (m)</div>
          <div class="col-md-4">
            <input type="number" name="mattien" value="{{ isset($p->mattien)?$p->mattien:0 }}" class="form-control">
          </div>
          <div class="col-md-2">Đường vào (m)</div>
          <div class="col-md-4">
            <input type="number" name="duongvao" value="{{ isset($p->duongvao)?$p->duongvao:0 }}" class="form-control">
          </div>
        </div>
      </div>
<!-- END -->
<!-- Huongnha-bancong -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Hướng ban công</div>
          <div class="col-md-4">
            <select name="huongbancongid" id="">
              <?php $hbc = DB::table('tbl_huong')->get() ?>
              <?php foreach ($hbc as $c): ?>
                <option value="{{$c->pk_huong_id }}" @if(isset($p->huongbancongid)&&$c->pk_huong_id==$p->huongbancongid) selected @endif>{{ $c->c_name }}</option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="col-md-2">Hướng nhà</div>
          <div class="col-md-4">
            <select name="huongnhaid">
              <?php foreach ($hbc as $c): ?>
                <option value="{{$c->pk_huong_id }}" @if(isset($p->huongnhaid)&&$c->pk_huong_id==$p->huongnhaid) selected @endif>{{ $c->c_name }}</option>
              <?php endforeach ?>              
            </select>
          </div>
        </div>
      </div>
<!-- END -->
<!-- Tang-phongtam-phongngu-gara -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Tầng</div>
          <div class="col-md-4">
            <input type="number" value="{{ isset($p->sotang)?$p->sotang:'' }}" class="form-control" name="sotang" required="">
          </div>
          <div class="col-md-2">Gara</div>
          <div class="col-md-4">
            <select name="c_gara" id="" class="form-control">
                <option value="1" @if(isset($p->c_gara)&&$p->c_gara==1) selected @endif>Yes</option>
                <option value="0" @if(isset($p->c_gara)&&$p->c_gara==0) selected @endif>No</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Phongtam-ngu -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Phòng tắm</div>
          <div class="col-md-4">
            <input type="number" value="{{ isset($p->phongtam)?$p->phongtam:'' }}" class="form-control" name="phongtam" required="">
          </div>
          <div class="col-md-2">Phòng ngủ</div>
          <div class="col-md-4">
            <input type="number" value="{{ isset($p->phongngu)?$p->phongngu:'' }}" class="form-control" name="phongngu" required="">
          </div>
        </div>
      </div>
<!-- Noi that -->
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Nội thất có sẵn </div>
          <div class="col-md-10">
            <textarea name="noithat" id="">
              {{ isset($p->noithat)?$p->noithat:''  }}
            </textarea>
            <script>CKEDITOR.replace('noithat');</script>
          </div>
        </div>
      </div>
<!-- END -->
<!-- :images -->
  <div class="form-group" style="padding: 5px">
    <p>Images</p><br>
          <div id="delete-img" style="display: inline;cursor: help;">
            @if(isset($p->pk_estate_id))
            <?php
            $img = DB::table("tbl_img")->where("fk_estate_id","=",$p->pk_estate_id)->get(); ?>
            <?php foreach ($img as $i): ?>
              <i style="color: red;" class="fa fa-times" aria-hidden="true"></i>
              <img src="{{ asset('public/upload/product/'.$i->c_name) }}" width="150px" alt="" id="img-product" data-toggle="tooltip" data-placement="bottom" title="Bạn có muốn xóa file !">
            <?php endforeach ?>
            @endif
          </div>
          <script>
            jQuery(document).ready(function($) {
              $(document).on('click', '#delete-img img', function(event) {
                event.preventDefault();
                console.log($(this).index());
                var k = $(this).index()+1;
                var src = $("#delete-img img:nth-child("+k+")").attr("src");
                var filename = src.replace("http://localhost/php24_project/public/upload/product/","");
                $.ajax({
                  url: base_url+'product-estate/delete-img/'+filename,
                  type: 'get',
                  dataType: 'html',
                  data: {"c_name": filename},
                  success:function(data){
                    $("#delete-img").html(data);
                  }
                })
                
                });
            });
          </script>
          <div id="btn-add-img" class="btn-primary" style="width: 150px;height: 40px;text-align: center;padding: 10px 0px;margin: 10px 10px;">Thêm ảnh</div>
      </div>
<!-- End -->
<!-- input:images -->
  <div class="form-group add-img" style="padding: 5px;">
        <div class="row">
          <div class="col-md-2">Images</div>
          <div class="col-md-10">
              <input type="file" name="c_img[]" class="btn btn-danger" multiple=""  >
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          $("#btn-add-img").click(function(event) {
            $(".add-img").addClass('active-img')
          });
        });
      </script>
<!-- End -->
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<button class="btn btn-info" type="submit">Process</button>
						<button class="btn btn-danger" type="reset">Reset</button>
					</div>
				</div>
			</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 @endif
<table class="table table-hover" style="margin: auto;">
  <a href="{{ url('admin/product-estate?act=add') }}" class="btn btn-success">ADD</a>
  <thead class="thead-light">
    <tr>
      <th>Image</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">District</th>
      <th scope="col">Areage</th>
      <th scope="col">Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($arr as $rows): ?>
  		<tr>
        <?php $img = DB::table("tbl_img")->where("fk_estate_id","=",$rows->pk_estate_id)->first(); ?>
  			<td>@if(isset($img->c_name)) <img src="{{ asset('public/upload/product/'.$img->c_name) }}" alt="" width="100px"> @endif</td>
  			<td>{{ $rows->c_name }}</td>
        <td>
          <?php $category = DB::table('tbl_loai')->where("pk_loai_id","=",$rows->fk_loai_id)->first() ?>
          {{ $category->c_name }}
        </td>
        <td>
          <?php $dis = DB::table('district')->where("districtid","=",$rows->districtid)->first() ?>
          {{ $dis->type.' '.$dis->name }}</td>
        <td>{{ $rows->dientich }}&nbsp;m<sup>2</sup></td>
        <td>{{ number_format($rows->c_price )}}</td>
  			<td>
  				<a href="{{ url('admin/product-estate?act=edit&id='.$rows->pk_estate_id) }}">Edit</a>&nbsp;
  				<a href="{{ url('admin/product-estate/delete/'.$rows->pk_estate_id) }}"  onclick="return window.confirm('Are you sure?');">Delete</a>
  			</td>
  		</tr>
  	<?php endforeach ?>
  </tbody>
  <ul class="pagination" style="position: fixed;right: 0;top: -35px;">
  	{{ $arr->links() }}
  </ul>
</table>
<script type="text/javascript">

</script>
@endsection