@extends('backend.layout')
@section('controller')
<?php $form_control = url("admin/search-estate/do_search") ?>
<div class="search" style="margin-top: 30px;">
	<!-- <form action="{{ $form_control }}" method="post">
		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> -->
	<div class="form-group">
		<div class="row">
			<div class="col-md-2"><label for="search_txt" style="font-size: 14px"><i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp;TÌM KIẾM :</label></div>
			<div class="col-md-4">
				<select class="bg-primary "  name="categoryid" id="categoryid" onchange="showTxt(this.value)">
					<option value="1">Tên sản phẩm</option>
					<option value="2">Dự Án</option>
					<option value="3">Quận / Huyện</option>
				</select>
			</div>
			<div id="example"><strong>Tìm kiếm theo tên * Ex</strong> : <i>Căn hộ cao cấp Hồ Tây<i></div>
			<script>
				var base_url = "http://localhost/php24_project/admin/";
				function showTxt(id){
					$.ajax({
						url: base_url+'search-estate/choose/'+id,
						type: 'get',
						dataType: 'html',
						data: {'id': id},
						success:function(html){
							$("#example").html(html);
						}
					})
				}
			</script>
		
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6" id="box-search">
				<input type="text" id="search_txt" name="search_txt" class="form-control" placeholder="Tìm kiếm *" >
				<div id="element"></div>
			</div>
			<script type="text/javascript">
				$(document).ready(function($) {
					$("#search_txt").keyup(function(event) {
						var key = $(this).val();
						var id = $("#categoryid").val();
						
						if (key!=""&&key!=" "&&key!="  ") {
							$.ajax({
							url: base_url+'search-estate/element/'+id+"/"+key,
							type: 'get',
							dataType: 'html',
							data: {id: id,key:key},
							success:function(data){
								$("#element").slideDown();
								$("#element").html(data);
							}
						})
						}
					});
				$(document).on('click', 'li.document', function(event) {
					var txt = $(this).text();
					$("#search_txt").val(txt);
					$("#element").slideUp();
				});
				});
			</script>
			<div class="col-md-6">
				<button class="btn btn-success" id="btn-search" >Process</button>
			</div>
			<script>
				$(document).ready(function($) {
					$("#btn-search").click(function(event) {
						var keyword = $("#search_txt").val();
						var id = $("#categoryid").val();
						$.ajax({
							url: base_url+'search-estate/do_search/'+id+"/"+keyword,
							type: 'get',
							dataType: 'html',
							data: {"keyword": keyword,"id" : id},
							success:function(data){
								$("#content").html(data);
							}
						})
					});
				});
			</script>
		</div>
	</div>
<!-- </form> -->
	<div class="container-search">
	<table class="table table-hover" style="margin: auto;">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">Name</th>
	      <th scope="col">Category</th>
	      <th scope="col">District</th>
	      <th scope="col">Areage</th>
	      <th scope="col">Price</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody id="content">
	  	
	  </tbody>
  </table>
	</div>
</div>
@endsection