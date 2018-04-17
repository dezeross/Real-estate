<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page quản trị - Dezeros 2018</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('public/backend/css/style.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="{{ asset('public/backend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('public/backend/js/js.js') }}"></script>
	<!-- <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script> -->
	<script src="{{ asset('public/backend/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Dezeros-2018</a>
		    </div>
		    <ul class="nav navbar-nav">
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li><a href="{{ url('admin/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		    </ul>
		  </div>
</nav>
	</div>
	<div class="menu">
		<ul>
			<li><a href="{{ url('admin/user') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;User</a></li>
			<li class="menu-tab"><a><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Nhà Đất&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
				<ul class="son">
					<li><a href="{{ url('admin/product-estate?act=add') }}">Thêm sản phẩm</a></li>
					<li><a href="{{ url('admin/search-estate') }}">Tìm & Sửa SP</a></li>
					<li><a href="{{ url('admin/product-estate') }}">Thông tin SP</a></li>
				</ul>
			</li>
			<li class="menu-tab1"><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Tin tức&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
				<ul class="son-a">
					<li><a href="#">Thêm tin tức</a></li>
					<li><a href="#">Sửa tin tức</a></li>
				</ul>
			</li>
			<li><a href="{{ url('admin/nhan-vien-tu-van') }}"><i class="fa fa-fa" aria-hidden="true"></i>&nbsp;Nhân viên TV&nbsp;</a>
			</li>
			<li><a href="{{ url('admin/du-an-hot') }}"><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;Dự án Hot&nbsp;</a>
			</li>
			<li><a href="{{ url('admin/hinhthuc') }}"><i class="fa fa-superpowers" aria-hidden="true"></i>&nbsp;Hình thức</a></li>
			<li><a href="{{ url('admin/loai-nha-dat') }}"><i class="fa fa-industry" aria-hidden="true"></i>&nbsp;Loại nhà đất</a></li>
			<li><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Thống kê</a></li>
		</ul>
	</div>
	<div class="container" style="margin-top: 100px">
		@yield('controller')
	</div>
</body>
</html>