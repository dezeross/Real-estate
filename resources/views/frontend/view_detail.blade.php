@extends('frontend.layout')
@section('home')
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">{{ $est->c_name }}</h1>              
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 
										<script>
							            $(document).ready(function () {

							                $('#image-gallery').lightSlider({
							                    gallery: true,
							                    item: 1,
							                    thumbItem: 9,
							                    slideMargin: 0,
							                    speed: 500,
							                    auto: true,
							                    loop: true,
							                    onSliderLoad: function () {
							                        $('#image-gallery').removeClass('cS-hidden');
							                    }
							                });
							            });
							        </script>
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    	<?php foreach ($img as $i): ?>	
                                        <li data-thumb="{{ asset('public/upload/product/'.$i->c_name) }}"> 
                                            <img src="{{ asset('public/upload/product/'.$i->c_name) }}" />
                                        </li>
                                    	<?php endforeach ?>
                                                                                 
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left" style="color: black;font-weight: bolder;">{{ $est->c_name }}</h1>
                                <span class="property-price pull-right">{{ number_format($est->c_price) }} VND</span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">    
                                    	<i class="fa fa-eercast" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Trạng thái</span>
                                        <?php $ht =DB::table("tbl_hinhthuc")->where("pk_hinhthuc_id","=",$est->fk_hinhthuc_id)->first() ?>
                                        <span class="property-info-value">{{ $ht->c_name }}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <i class="fa fa-area-chart" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Diện tích</span>
                                        <span class="property-info-value">{{ $est->dientich }}<b class="property-info-unit">m<sup>2</sup></b></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <i class="fa fa-bed" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Phòng ngủ</span>
                                        <span class="property-info-value">{{ $est->phongngu }}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <i class="fa fa-car" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Gara</span>
                                        <span class="property-info-value">{{ isset($est->c_gara)&&$est->c_gara==1?"Có":"Không" }}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <i class="fa fa-bath" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Phòng tắm</span>
                                        <span class="property-info-value">{{ $est->phongtam }}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <i class="fa fa-building-o" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Tầng</span>
                                        <span class="property-info-value">{{ $est->sotang }}</span>
                                    </span>
                                </div>
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <i class="fa fa-location-arrow" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Hướng nhà</span>
                                        <?php $h = DB::table("tbl_huong")->where("pk_huong_id","=",$est->huongnhaid)->first() ?>
                                        <span class="property-info-value">{{ $h->c_name }}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <i class="fa fa-address-card" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Địa chỉ</span>
                                        <?php $dis = DB::table("district")->where("districtid","=",$est->districtid)->first() ?>
                                        <span class="property-info-value">{{ $dis->name }} - Hà Nội</span>
                                    </span>
                                </div>


                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Mô tả</h4>
                                <div class="s-property-content">
                                    <?php echo $est->c_description ?>
                                </div>
                            </div>
                            <!-- End description area  -->

                            <div class="section additional-details">

                                <h4 class="s-property-title">Chi tiết bổ sung</h4>

                                <ul class="additional-details-list clearfix">
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Địa chỉ chi tiết</span>
                                        <?php $w = DB::table("ward")->where("wardid","=",$est->wardid)->first() ?>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">
                                        	<?php echo $w->type." ".$w->name." - ".$dis->type." ".$dis->name ?>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Xây dựng năm </span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"></span>
                                    </li>
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Dự án</span>
                                        <?php $project = DB::table("tbl_project")->where("pk_project_id","=",$est->projectid)->first(); ?>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $project->c_name }}</span>
                                    </li>

                                    
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Hướng ban công</span>
                                        <?php $ho = DB::table("tbl_huong")->where("pk_huong_id","=",$est->huongbancongid)->first(); ?>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $ho->c_name }}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Mặt tiền</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $est->mattien }}m<sup>2</sup></span>
                                    </li> 
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Đường vào</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $est->duongvao }}m<sup>2</sup></span>
                                    </li> 

                                </ul>
                            </div>  
                            <!-- End additional-details area  -->

                            <div class="section property-features">      

                                <h4 class="s-property-title">Dịch vụ </h4>                            
                                <ul>
                                    <li><a href="properties.html">Bể bơi</a></li>   
                                    <li><a href="properties.html">Mua sắm</a></li>
                                    
                                    <li><a href="properties.html">Công viên</a></li>
                                </ul>

                            </div>
                            <!-- End features area  -->

                            <div class="section"> 
                                <h4 class="s-property-title">Nội thất</h4> 
                                <div class="s-property-content">
                                    <?php echo $est->noithat; ?>
                                </div>
                            </div>
                            <!-- End video area  -->
                            
                            

                            <div class="section property-share"> 
                                <h4 class="s-property-title">Chia sẻ cho bạn bè</h4> 
                                <div class="roperty-social">
                                    <span class='st_sharethis_large' displayText='ShareThis'></span>
                                    <span class='st_facebook_large' displayText='Facebook'></span>
                                    <span class='st_twitter_large' displayText='Tweet'></span>
                                    <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                    <span class='st_email_large' displayText='Email'></span>
                                    <span class='st_googleplus_large' displayText='googleplus'></span>
                                                         
                                </div>
                            </div>
                            <!-- End video area  -->
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="{{ asset('public/upload/user/'.$user->c_img) }}" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="" style="color: white">{{ $user->c_name }}</a>
                                                    <span>Chức vụ : </span>        
                                                </h3>
                                                <div class="dealer-social-media" style="color: white">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i> {{ $user->c_address }}</li>
                                                <li><i class="pe-7s-mail strong"> </i> {{ 
                                                $user->c_email }}</li>
                                                <li><i class="pe-7s-call strong"> </i>{{ $user->c_phone }}</li>
                                            </ul>
                                            <p><i class="fa fa-fa"></i>&nbsp;

 Tư vấn chuyên nghiệp với nhiều năm kinh nghiệm tư vấn cho thuê</p>
                                            <p><i class="fa fa-fa"></i>&nbsp;

Chúng tôi giúp bạn tìm được và đàm phán giá thuê hoặc mua nhà tốt nhất</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Bất động sản tương tự</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                	<?php $est_same = DB::table("tbl_estate")->where("fk_loai_id","=",$est->fk_loai_id)->where("pk_estate_id","<>",$est->pk_estate_id)->take(5)->get() ?>
                                        <ul>
                                        <?php foreach ($est_same as $rows): ?>
                                        	<li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">	<?php $i = DB::table("tbl_img")->where("fk_estate_id","=",$rows->pk_estate_id)->first(); ?>
                                                <a href="single.html"><img src="{{asset('public/upload/product/'.$i->c_name) }}"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                            <?php $url_name=$str->url_encode(strtolower($str->vn_to_str($rows->c_name)));
                                                    
                                                 ?>
                                                <h6> <a href="{{ url('chi-tiet/'.$rows->pk_estate_id.'/'.$url_name.'.html') }}" style="font-weight: lighter;font-style: normal;">{{ $rows->c_name }}</a></h6>
                                                <span class="property-price">{{ number_format($rows->c_price) }} VND</span>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                        <?php $l = DB::table("tbl_loai")->where("pk_loai_id","=",$est->fk_loai_id)->first();
                                        $un = $str->url_encode(strtolower($str->vn_to_str($l->c_name)));
                                         ?>
                                        <li><a href="{{ url('bat-dong-san/'.$un.'/moi-cap-nhat') }}"> >> Xem thêm</a></li>
                                        </ul>
                            
                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tìm kiếm thông minh</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    <form action="{{ url('/search') }}" class=" form-inline" method="get"> 
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Key word" name="keyword">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-6">

                                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn quận huyện" name="districtid" onchange="showProject(this.value)">
                                                    	<?php foreach ($district as $rows): ?>
                                                    		<option value="{{ $rows->districtid }}">{{ $rows->name }}</option>
                                                    	<?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">

                                                    <select id="basic" class="selectpicker show-tick form-control" title="Chọn hình thức" name="hinhthuc">
                                                        <?php foreach ($hinhthuc as $rows): ?>
                                                        	<option value="{{ $rows->pk_hinhthuc_id }}">{{ $rows->c_name }}</option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Mức giá </label>
                                            <select class="selectpicker show-tick form-control" title="Mức giá thành" name="price_range">
                                                    <option value="0">Thỏa thuận</option>
                                                    <option value="1">< 500 triệu</option>
                                                    <option value="2">500 - 800 triệu</option>
                                                    <option value="3">800 triệu - 1 tỷ</option>
                                                    <option value="4">1 - 2 tỷ</option>
                                                    <option value="5">2 - 3 tỷ</option>
                                                    <option value="6">3 - 5 tỷ</option>
                                                    <option value="7">5 - 7 tỷ</option>
                                                    <option value="8">7 - 10 tỷ</option>
                                                    <option value="9">10 - 20 tỷ</option>
                                                    <option value="10">20 - 30 tỷ</option>
                                                    <option value="11">> 30 tỷ</option>
                                            </select>          
                                                </div>
                                                <div class="col-xs-6">
                                                   <label for="property-geo">Diện tích </label>
                                            <select class="selectpicker show-tick form-control" title="Diện tích" name="dientich" style="height: 100px">
                                                 <option value="0">KXĐ</option>   
                                                <option value="1"><= 30 m2</option>
                                                <option value="2">30 - 50 m2</option>
                                                <option value="3">50 - 80 m2</option>
                                                <option value="4">80 - 100 m2</option>
                                                <option value="5">100 - 150 m2</option>
                                                <option value="6">150 - 200 m2</option>
                                                <option value="7">200 - 250 m2</option>
                                                <option value="8">250 - 300 m2</option>
                                                <option value="9">300 - 500 m2</option>
                                                <option value="10">>= 500 m2</option>
                                            </select>       
                                                </div>                                            
                                            </div>
                                        </fieldset>                                

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6" id="du-an">
                                                    <label for="">Dự án</label>
                                                    <select name="project" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn Dự án theo Quận Huyện">
                                                        
                                                    </select>
                                                </div>

                                                <div class="col-xs-6">
                                                    <label>Loại</label>
                                            <select name="loai" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Loại">
                                                <?php $loai = DB::table("tbl_loai")->get() ?>
                                                <?php foreach ($loai as $rows): ?>
                                                    <option value="{{ $rows->pk_loai_id }}">{{ $rows->c_name }}</option>
                                                <?php endforeach ?>
                                            </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label>Phòng tắm :</label>
                                            <div class="""slidecontainer">
                                              <input type="range" min="0" max="5" value="0" class="slider" id="phongtam" name="phongtam">
                                              <p><span id="sophongtam"></span> Phòng</p>
                                                 <script>
                                        var slider = document.getElementById("phongtam");
                                        var output = document.getElementById("sophongtam");
                                        output.innerHTML = slider.value;

                                        slider.oninput = function() {
                                          output.innerHTML = this.value;
                                        }
                                        </script>
                                                 </div> 
                                                </div>

                                                <div class="col-xs-6">
                                                    <label>Phòng ngủ :</label>
                                                <div class="""slidecontainer">
                                                  <input type="range" min="0" max="5" value="0" class="slider" id="phongngu" name="phongngu">
                                                  <p><span id="sophongngu"></span> Phòng</p>
                                                </div>
                                                 <script>
                                        var slider1 = document.getElementById("phongngu");
                                        var output1 = document.getElementById("sophongngu");
                                        output1.innerHTML = slider.value;

                                        slider1.oninput = function() {
                                          output1.innerHTML = this.value;
                                        }
                                        </script>
                                                </div>                                            
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-12" style="text-align: center;">
                                                    <button type="submit" class="btn-danger">Search</button>
                                                </div>
                                            </div>
                                        </fieldset>                 
                                    </form>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>

            </div>
        </div>

@endsection