@extends('frontend.layout')
@section('home')
<!-- slider-area -->
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="public/frontend/assets/img/slide2/slider-image-4.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="public/frontend/assets/img/slide2/slider-image-1.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="public/frontend/assets/img/slide2/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="public/frontend/assets/img/slide2/slider-image-3.jpg" alt="The Last of us"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2 style="text-shadow: 1px 1px #95a5a6;font-weight: bolder;padding: 10px 0; ">Tìm kiếm chưa bao giờ dễ dàng đến thế </h2>
                       

                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="{{ url('/search') }}" class=" form-inline" method="get">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Key word" name="keyword">
                                    
                                </div>
                                <div class="form-group">     <script>
                                    
                                 
                                </script>                             
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Quận / Huyện" name="districtid" onchange="showProject(this.value)">
                                        <option value="0" selected="">Quận Huyện</option>
									<?php foreach ($dis as $rows): ?>
										<option value="{{ $rows->districtid }}">{{ $rows->name }}</option>
									<?php endforeach ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">                                     
                                    <select name="hinhthuc" id="basic" class="selectpicker show-tick form-control" title="Hình thức">
                                            <option value="0" selected="">Hình thức</option>
                                        <?php foreach ($ht as $rows): ?>
                                        	<option value="{{ $rows->pk_hinhthuc_id }}">{{ $rows->c_name }}</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">   

                                        <div class="form-group mar-r-20">
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
                                        <!-- End of  -->  
                                        <div class="form-group mar-l-20">
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
                                        <!-- End of  --> 
                                    </div>
                                    <br>
                                    <div class="search-row">  
                                        <div class="form-group mar-r-20" id="du-an">
                                            <label for="">Dự án</label>
                                            <select name="project" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn Dự án theo Quận Huyện">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group mar-l-20">
                                            <label>Loại</label>
                                            <select name="loai" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Loại">
                                                <?php foreach ($loai as $rows): ?>
                                                    <option value="{{ $rows->pk_loai_id }}">{{ $rows->c_name }}</option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div> 
                                    <br>
                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label>Phòng tắm :</label>
                                            <div class="""slidecontainer">
                                              <input type="range" min="0" max="6" value="0" class="slider" id="phongtam" name="phongtam">
                                              <p><span id="sophongtam"></span> Phòng</p>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <script>
                                        var slider = document.getElementById("phongtam");
                                        var output = document.getElementById("sophongtam");
                                        output.innerHTML = slider.value;

                                        slider.oninput = function() {
                                          output.innerHTML = this.value;
                                        }
                                        </script>
                                        <div class="form-group mar-l-20">
                                            <label>Phòng ngủ :</label>
                                            <div class="""slidecontainer">
                                              <input type="range" min="0" max="6" value="0" class="slider" id="phongngu" name="phongngu">
                                              <p><span id="sophongngu"></span> Phòng</p>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <script>
                                        var slider1 = document.getElementById("phongngu");
                                        var output1 = document.getElementById("sophongngu");
                                        output1.innerHTML = slider.value;

                                        slider1.oninput = function() {
                                          output1.innerHTML = this.value;
                                        }
                                        </script>
                                    </div>
                                    

                                    <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>  
                                </div>                    

                            </form>
                        </div>
                    </div>
                </div>
            </div>
 	</div>
<!-- end -->
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
<!-- Title-page -->
	<div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
	        <h2>Căn hộ HOT nhất hiện nay</h2>
	        <p>Những dự án chung cư ,biệt thự tốt do các chủ đầu tư uy tín , các đơn vị thi công giàu kinh nghiệm được bán với giá thành hợp lý nhất</p>
        </div>
    </div>
<!-- end-title -->
<!-- List-product -->
	<div class="row">
                    <div class="proerty-th">
	<?php foreach ($est as $rows): ?>	
        <?php $name_url=$str->url_encode(strtolower($str->vn_to_str($rows->c_name))); ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item" style="height: 390px">
                            	<?php $img =DB::table("tbl_img")->where("fk_estate_id","=",$rows->pk_estate_id)->first(); ?>
                                <div class="item-thumb">
                                    
                                    <a href="{{ url('chi-tiet/'.$rows->pk_estate_id.'/'.$name_url.'.html') }}" ><img src="{{ asset('public/upload/product/'.$img->c_name) }}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <a href="{{ url('chi-tiet/'.$rows->pk_estate_id.'/'.$name_url.'.html')}}" style="font-style: normal;" >{{ $rows->c_name }} </a>
                                    <?php $q = DB::table('district')->where("districtid","=",$rows->districtid)->first(); ?>
                                    <span class="address-property">{{ $q->type." ".$q->name }}</span>
                                    <span class="pull-left1"><b>Diện tích :</b> {{ $rows->dientich }} m<sup>2</sup> </span>
                                    <span class="proerty-price pull-right">{{ number_format($rows->c_price) }} VND&nbsp;&nbsp;&nbsp;<i class="fa fa-bath" aria-hidden="true" style="font-size: 18px"></i> &nbsp;({{ $rows->phongngu }}) &nbsp;<i class="fa fa-bed" aria-hidden="true"></i> &nbsp;({{ $rows->phongngu }})</span>
                                </div>
                            </div>
                        </div>
	<?php endforeach ?>
					<div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center" style="height: 410px">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="{{ url('/bat-dong-san') }}" >Không thể hiển thị hết ? </a></h5>
                                    <h5 class="tree-sub-ttl">Show all properties</h5>
                                    <form action="{{ url('/bat-dong-san/moi-cap-nhat') }}" method="get">
                                        
                                    <button class="btn border-btn more-black" value="All properties" type="submit">Tất cả các sản phẩm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
           </div>

		</div>
    </div>
<!-- END-List-product -->
<!-- AREA -->
<div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2>Logo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>Bất kỳ bất động sản nào</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>Với mọi khách hàng</h3>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-notebook pe-4x"></i>
                                            </div>
                                            <h3>Giá thành hợp lý</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-help2 pe-4x"></i>
                                            </div>
                                            <h3>Hỗ trợ bất cứ khi nào</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- END AREA -->
<div class="project-hot">
    <div class="container">
        <div class="row" style="margin-bottom: 20px">
        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center title-partner">
                        <!-- /.feature title -->
            <h2>Dự án đang hot hiện nay</h2>
        </div>
    </div>
    <div class="container">
            <div class="row">
        <?php foreach ($project as $rows): ?>
            <?php $project_url=$str->url_encode(strtolower($str->vn_to_str($rows->c_name))); ?>
            <div class="col-sm-4">
                <div class="item-thumb-project">
                    <a href="{{ url('/du-an/'.$rows->pk_project_id.'/'.$project_url.'-new') }}"><img src="{{ asset('public/upload/project/'.$rows->c_img) }}" alt=""></a>
                    <h5>{{ $rows->c_name }}</h5>
                </div>
                <div class="p-title"></div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</div>
<div class="boy-partner">

    <div class="container">
        <div class="row" style="margin-bottom: 20px">
        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center title-partner">
                        <!-- /.feature title -->
            <h2>Đối tác tin cậy</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/Vin-Group.png') }}" alt="" >
            </div>
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/Vihajico.png') }}" alt="" >
            </div>
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/TNR-Holding.png') }}" alt="">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/Sun-Group.png') }}" alt="">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/Shunshine-Group.png') }}" alt="">
            </div>
            <div class="col-md-2">
                <img src="{{ asset('public/frontend/assets/img/doi-tac/MIK-Group.png') }}" alt="">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><img src="{{ asset('public/frontend/assets/img/doi-tac/Hoa-Phat.png') }}" alt=""></div>
            <div class="col-md-2"><img src="{{ asset('public/frontend/assets/img/doi-tac/batdongsan.png') }}" alt=""></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- ASK -->
	<div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>Bạn đang muốn tìm kiếm nhà ở ?</h2>
                                <p> Tìm kiếm ngay căn hộ phù hợp với bản thân và gia đình bạn !</p>                                        
                            </div>
                            <div class="asks-first-arrow">
                                <a href="{{ url('/search') }}"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0" >
                        <div  class="asks-first" style="height: 132px">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>Bạn đang muốn bán hay cho thuê bất động sản?</h2>
                                <p>Liên hệ với chúng tôi, chúng tôi sẽ giúp bạn bất cứ khi nào !</p>
                            </div>
                            <div class="asks-first-arrow">
                                <a href="{{ url('/lien-he') }}"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">Liên hệ ? Gọi chúng tôi  : <span class="strong"> + 3-123- 424-5700</span></p>
                    </div>
                </div>
                
            </div>
        </div>
<!-- ASK -->
<!-- Trust -->

<!-- Trust end -->
@endsection