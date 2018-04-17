@extends('backend.layout')
@section('controller')
<?php 
	$act = Request::get('act');
	switch ($act) {
		case 'edit':
			$id = Request::get('id');
			$form_control = url('admin/loai-nha-dat?act=edit&id='.$id);
			$loai = DB::table('tbl_loai')->where('pk_loai_id','=',$id)->first();
			break;
		case 'add':
			$form_control = url('admin/loai-nha-dat?act=add');
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
        <h4 class="modal-title">{{ isset($act)&&$act=='edit'?'Edit Hinh thuc':'Add Hinh thuc' }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $form_control }}" method="post">
        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="{{ isset($loai->c_name)?$loai->c_name:'' }}" name="name" class="form-control">
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
  <thead class="thead-light">
    <tr>
      <th></th>
      <th scope="col">Name</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($arr as $rows): ?>
  		<tr>
  			<td><a href="{{ url('admin/loai-nha-dat?act=add') }}" class="btn btn-success">ADD</a></td>
  			<td>{{ $rows->c_name }}</td>
  			<td>
  				<a href="{{ url('admin/loai-nha-dat?act=edit&id='.$rows->pk_loai_id) }}">Edit</a>&nbsp;
  				<a href="{{ url('admin/loai-nha-dat/delete/'.$rows->pk_loai_id) }}">Delete</a>
  			</td>
  		</tr>
  	<?php endforeach ?>
  </tbody>
  <ul class="pagination" style="position: fixed;right: 0;top: -35px;">
  	{{ $arr->links() }}
  </ul>
</table>
@endsection