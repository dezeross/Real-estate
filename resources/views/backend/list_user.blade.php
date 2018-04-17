@extends('backend.layout')
@section('controller')
<?php 
	$act = Request::get('act');
	switch ($act) {
		case 'edit':
			$id = Request::get('id');
			$form_control = url('admin/user?act=edit&id='.$id);
			$user = DB::table('users')->where('id','=',$id)->first();
			break;
		case 'add':
			$form_control = url('admin/user?act=add');
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
        <h4 class="modal-title">{{ isset($act)&&$act=='edit'?'Edit User':'Add User' }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $form_control }}" method="post">
        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Email</div>
					<div class="col-md-10">
						<input type="email" @if(isset($user->email)) readonly @endif value="{{ isset($user->email)?$user->email:'' }}" name="email" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="{{ isset($user->name)?$user->name:'' }}" name="name" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group" style="padding: 5px">
				<div class="row">
					<div class="col-md-2">Password</div>
					<div class="col-md-10">
						<input type="password"  name="password" class="form-control">
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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($arr as $rows): ?>
  		<tr>
        <td>{{ $rows->id }}</td>
  			<td><a href="{{ url('admin/user?act=add') }}" class="btn btn-success">ADD</a></td>
  			<td>{{ $rows->name }}</td>
  			<td>{{ $rows->email }}</td>
  			<td>
  				<a href="{{ url('admin/user?act=edit&id='.$rows->id) }}">Edit</a>&nbsp;
  				<a href="{{ url('admin/user/delete/'.$rows->id) }}">Delete</a>
  			</td>
  		</tr>
  	<?php endforeach ?>
  </tbody>
  <ul class="pagination" style="position: fixed;right: 0;top: 0;">
  	{{ $arr->links() }}
  </ul>
</table>
@endsection