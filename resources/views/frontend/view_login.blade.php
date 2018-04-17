@extends('frontend.layout')
@section('home')
<!-- title -->
	<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Tạo tài khoản / Đăng nhập </h1>               
                    </div>
                </div>
            </div>
   	</div>
<!-- END title -->
<!-- FORM -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Tài khoản mới</h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" required="" name="c_name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="dk_email" required="" name="c_email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="dk_password" required="" name="c_password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Đăng kí</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Đăng nhập : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="dn_email" required="" name="c_email" >
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="dn_password" required="" name="c_password" >
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Đăng nhập</button>
                                </div>
                            </form>
                            <br>
                            
                            <h2>Đăng nhập bằng :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#" style="background: #4267B2"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#" style="background: #3498db"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
<!-- END:FORM -->
@endsection