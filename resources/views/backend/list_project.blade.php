@extends("backend.layout")
@section("controller")
<?php 
	$act = Request::get('act');
	switch ($act) {
		case 'edit':
			$id = Request::get('id');
			$form_control = url('admin/du-an-hot?act=edit&id='.$id);
			$project = DB::table('tbl_project')->where('pk_project_id','=',$id)->first();
			break;
		case 'list':
			$hot = DB::table("tbl_project")->where("c_hotproject","=",1)->get();
			break;
	}
 ?>
 @if($act=='edit')
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
        <h4 class="modal-title">{{ isset($act)&&$act=='edit'?'Edit Project':'Add Project' }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $form_control }}" enctype="multipart/form-data" method="post">
        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="{{ isset($project->c_name)?$project->c_name:'' }}" name="c_name" @if(isset($project->c_name)) readonly @endif class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Image</div>
					<div class="col-md-10">
						<input type="file" name="c_img" class="btn btn-info">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Hot Product</div>
					<div class="col-md-10">
						<input type="checkbox"  name="c_hotproject" @if(isset($project->c_hotproject)&&$project->c_hotproject==1) checked @endif >
					</div>
				</div>
			</div>
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
 @if($act=="list")
 <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal2').modal('show');
    });
</script>
  <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Dự án Hot</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
        	<form action="{{ url('admin/du-an-hot') }}" method="get">
        		<button style="width: 100%" type="submit" class="btn btn-info">>>> Quay Lại <<<</button>
        	</form>
		<thead class="thead-light">
		    <tr>
		      <th>Image</th>
		      <th>Name</th>
		      <th>Hot ?</th>
		      <th>Action</th>
		    </tr>
		</thead>
		<tbody id="project-hot">
			<?php foreach ($hot as $rows): ?>
				<tr>
					<td><img src="{{ asset('public/upload/project/'.$rows->c_img) }}" alt="" width="60px"></td>
					<td>{{ $rows->c_name }}</td>
					<td>@if($rows->c_hotproject==1)<span class="glyphicon glyphicon-check"></span> @endif</td>
					<td><a href="{{ url('admin/du-an-hot/delete-hot-project/'.$rows->pk_project_id) }}">Bỏ hot project</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 @endif
<br>
<br>
<div class="form-group">
	<div class="row">
		<div class="col-md-2"><h4>Select district : </h4></div>
		<div class="col-md-10">
			<select name="districtid" id="districtid" class="bg-primary" onchange="showProject(this.value)">
				<?php foreach ($district as $rows): ?>
					<option value="{{ $rows->districtid }}">{{ $rows->name }}</option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
</div>
<br>
<div class="form-group">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8"><a href="{{ url('admin/du-an-hot?act=list') }}" class="btn btn-success">Xem danh sách các dự án hot</a></div>
		<div class="col-md-2"></div>
	</div>
</div>
<script>
		var base_url  = "http://localhost/php24_project/admin/";
		function showProject(str){
			$.ajax({
				url: base_url+'du-an-dis/'+str,
				type: 'get',
				dataType: 'html',
				data: {"districtid": str},
				success:function(data){
					$("#project-hot").html(data);
				}
			})
			
		}
	
</script>
<div class="project-hot">
	<table class="table table-hover">
		<thead class="thead-light">
		    <tr>
		      <th>Image</th>
		      <th>Name</th>
		      <th>Hot ?</th>
		      <th>Action</th>
		    </tr>
		</thead>
		<tbody id="project-hot">
			<?php foreach ($p as $rows): ?>
				<tr>
					<td>@if(isset($rows->c_img)&&$rows->c_img!="") <img src="{{ asset('public/upload/project/'.$rows->c_img) }}" alt="" width="60px"> @endif</td>
					<td>{{ $rows->c_name }}</td>
					<td>@if($rows->c_hotproject==1)<span class="glyphicon glyphicon-check"></span> @endif</td>
					<td><a href="{{ url('admin/du-an-hot?act=edit&id='.$rows->pk_project_id) }}">Edit</a>&nbsp;<a href="{{ url('admin/du-an-hot/delte/'.$rows->pk_project_id) }}">Delete</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

@endsection