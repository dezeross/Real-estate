@extends("frontend.layout")
@section("home")
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Danh sách tìm kiếm</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container"> 
                <div class="row  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 padding-bottom-40 large-search"> 
                        <div class="search-form wow pulse">
                            <form action="{{ url('/search') }}" class=" form-inline" method="get">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label>Keyword</label>
                                        <input type="text" class="form-control" placeholder="Key word" name="keyword">
                                    </div>
                                    <div class="col-md-4"> 
                                        <label for="districtid">Quận huyện</label>                              
                                        <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Quận huyện" name="districtid" onchange="showProject(this.value)">
                                            <?php $dis = DB::table("district")->get() ?>
                                            <?php foreach ($dis as $rows): ?>
                                            	<option value="{{ $rows->districtid }}">{{ $rows->name }}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">       <label for="hinhthuc">Hình thức</label>                              
                                        <select id="basic" class="selectpicker show-tick form-control" name="hinhthuc" title="Trạng thái">
                                            <?php $ht = DB::table("tbl_hinhthuc")->get() ?>
                                            <?php foreach ($ht as $rows): ?>
                                            	
                                            <option value="{{ $rows->pk_hinhthuc_id }}">{{ $rows->c_name }}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                        <div class="col-md-3">
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

                                        <div class="col-md-3">
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

                                        <div class="col-md-3" id="du-an">
                                            <label for="">Dự án</label>
                                            <select name="project" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn Dự án theo Quận Huyện">
                                                
                                            </select>
                                        
                                        </div>
                                        <!-- End of  --> 

                                        <div class="col-md-3">
                                            <label>Loại</label>
                                            <select name="loai" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Loại">
                                                <?php $loai = DB::table("tbl_loai")->get() ?>
                                                <?php foreach ($loai as $rows): ?>
                                                    <option value="{{ $rows->pk_loai_id }}">{{ $rows->c_name }}</option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <!-- End of  --> 

								<div class="col-md-12">
                                    <div class="search-row">  
										<div class="col-md-2"></div>
                                        <div class="col-md-4">
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
                                        <!-- End of  -->  

                                        <div class="col-md-4">
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
                                        <div class="col-md-2"></div>
                                        <!-- End of  --> 
                                        <!-- End of  --> 
                                    </div>   
                                </div>  
                               <div class="col-md-12">
                                	<div class="search-row">
                                		<div class="col-md-6"></div>
                                		<div class="col-md-6">
                                			<button type="submit" class="btn btn-danger bg-danger" style="margin:auto;" id="btn-seach-center">Search</button>
                                		</div>
                                	</div>
                               	</div>
                                	                   
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12  clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Mới cập nhật <i class="fa fa-sort-amount-asc"></i>					
                                    </a>
                                </li>
                                
                            </ul><!--/ .sort-by-list-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>
					<script>
                                    $(document).ready(function() {
                                        $(".layout-grid").click(function(event) {
                                            $(".addClass").addClass('dez');
                                        });
                                        $(".layout-list").click(function(event) {
                                            $(".addClass").removeClass('hei');$(".addClass").removeClass('dez');
                                        });
                                    });
                                </script>                  
                    <div class="col-md-12 clear "> 
                        <div id="list-type" class="proerty-th">
                            <?php foreach ($est as $rows): ?>
                            	 <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item addClass hei">
                                    	<?php $i = DB::table("tbl_img")->where("fk_estate_id","=",$rows->pk_estate_id)->first(); 
                                    			$dis = DB::table("district")->where("districtid","=",$rows->districtid)->first();
                                    			$w = DB::table("ward")->where("wardid","=",$rows->wardid)->first();
                                    			$ht = DB::table("tbl_hinhthuc")->where("pk_hinhthuc_id","=",$rows->fk_hinhthuc_id)->first();
                                                $loai = DB::table("tbl_loai")->where("pk_loai_id","=",$rows->fk_loai_id)->first();
                                                $project = DB::table("tbl_project")->where("pk_project_id","=",$rows->projectid)->first();
                                    			$url_name=$str->url_encode(strtolower($str->vn_to_str($rows->c_name)));

                                                
                                    	?>
                                        <div class="item-thumb">
                                            <a href="{{ url('chi-tiet/'.$rows->pk_estate_id.'/'.$url_name.'.html') }}" ><img src="{{ asset('public/upload/product/'.$i->c_name) }}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="{{ url('chi-tiet/'.$rows->pk_estate_id.'/'.$url_name.'.html') }}">{{ $rows->c_name }}</a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Diện tích :</b> {{ $rows->dientich }} m<sup>2</sup></span><br>
                                            <span><b>Quận huyện :</b> {{ $dis->name }}</span><br>
                                            <span><b>{{ $loai->c_name }}</b></span><br>
                                            <span><b>Dự án : </b><i>{{ $project->c_name }}</i></span>
                                            <span class="proerty-price pull-right">{{ number_format($rows->c_price) }} VND</span>
                                            <p style="display: none;">{{ $w->type."".$w->name." - ".$dis->type." ".$dis->name }}</p>
                                            <div class="property-icon" style="font-size: 13px">
                                                <i class="fa fa-bath" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>({{ $rows->phongtam }})|
                                                <i class="fa fa-bed" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>({{ $rows->phongngu }})|
                                                <i class="fa fa-car" aria-hidden="true" style="color: #ee5253;font-size: 30px"></i>({{ $rows->c_gara==1?"Có":"Không" }})
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div> 
							<?php endforeach ?>
                    <div class="col-md-12 clear"> 
                        <div class="pull-right">
                            <div class="pagination">
                                {{ $est->render() }}
                            </div>
                        </div>                
                    </div>
                </div>                
            </div>
        </div>
</div>
<!-- end-content -->
@endsection