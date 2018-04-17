@extends('backend.layout')
@section('controller')
<?php 
	$act = Request::get('act');
	switch ($act) {
		case 'edit':
			$id = Request::get('id');
			$form_control = url('admin/nhan-vien-tu-van?act=edit&id='.$id);
			$nhanvien = DB::table('tbl_nhanvien')->where('pk_nhanvien_id','=',$id)->first();
			break;
		case 'add':
			$form_control = url('admin/nhan-vien-tu-van?act=add');
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
        <h4 class="modal-title">{{ isset($act)&&$act=='edit'?'Edit nhan-vien-tu-van':'Add nhan-vien-tu-van' }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $form_control }}" enctype="multipart/form-data" method="post">
        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Email</div>
					<div class="col-md-10">
						<input type="email" @if(isset($nhanvien->c_email)) readonly @endif value="{{ isset($nhanvien->c_email)?$nhanvien->c_email:'' }}" name="c_email" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="{{ isset($nhanvien->c_name)?$nhanvien->c_name:'' }}" name="c_name" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Image</div>
          <div class="col-md-10">
            <input type="file"  name="c_img" class="btn btn-danger" @if($act=='add') required @endif >
          </div>
        </div>
      </div>
      <div class="form-group" style="padding: 5px">
        <div class="row">
          <div class="col-md-2">Phone</div>
          <div class="col-md-10">
            <input type="text"  name="c_phone" class="form-control" value="{{ isset($nhanvien->c_phone)?$nhanvien->c_phone:'' }}">
          </div>
        </div>
      </div>
      <div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Address</div>
					<div class="col-md-10">
						<input type="text"  name="c_address" class="form-control" value="{{ isset($nhanvien->c_address)?$nhanvien->c_address:'' }}">
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
<table class="table table-hover" style="margin: auto;">
  <a href="{{ url('admin/nhan-vien-tu-van?act=add') }}" class="btn btn-success">ADD</a>
  <thead class="thead-light">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($arr as $rows): ?>
      <tr>
        <td><img src="{{ asset('public/upload/user/'.$rows->c_img) }}" width="100px" alt=""></td>
  			<td>{{ $rows->c_name }}</td>
        <td>{{ $rows->c_email }}</td>
        <td>{{ $rows->c_phone }}</td>
  			<td>{{ $rows->c_address }}</td>
  			<td>
  				<a href="{{ url('admin/nhan-vien-tu-van?act=edit&id='.$rows->pk_nhanvien_id) }}">Edit</a>&nbsp;
  				<a href="{{ url('admin/nhan-vien-tu-van/delete/'.$rows->pk_nhanvien_id) }}">Delete</a>
  			</td>
  		</tr>
  	<?php endforeach ?>
  </tbody>
  <ul class="pagination" style="position: fixed;right: 0;top: 0;">
  	{{ $arr->links() }}
  </ul>
</table>
@endsection