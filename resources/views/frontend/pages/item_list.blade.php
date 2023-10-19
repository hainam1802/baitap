@extends('frontend.layouts.master')
@section('content')

<div class="list-content clearfix" >
    <div class="content-hotel">
        <!--   tiêu đề-->
        <div class="container" style="margin-top: 30px">
            <div class="hotelListHeadLine">
                <h1 class="hotelName vspacingbottom15 hidden-xs">
                    Danh sách & bộ lọc
                    <span id="list-nameregion" style="display: none;">Đà Lạt</span>
                    <div class="visible-xs visible-sm">
                        <div class="vspacingbottom5"></div>
                    </div>
                </h1>
            </div>

            <div class="row">
                <!--   trái-->
                <div class="col-xs-12 col-md-3 sidebar-left">

                    <!--   bộ lọc-->
                    <div class="hidden-xs">
                        <div class="filter-list">
                            <!--  tên-->
                            <div class="filter-section">
                                <!--<div class="filter-menu"><span class="filter-title">Tìm khách sạn</span></div>-->
                                <div class="input-group">
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                           placeholder="Nhập tên khách sạn"
                                    />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" ><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--   sao-->
                            <div class="filter-section">
                                <div class="filter-menu"><span class="filter-title">Hạng sao</span></div>
                                <div class="filter-items">
                                    <!-- ngRepeat: item in dataStar track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="5_star" type="checkbox" class="ng-untouched ng-valid ng-dirty" />
                                            <label for="5_star">
                                                <span class="stars" style="color: #fdbf65;">
                                                    <!-- ngIf: item.ID>=50 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=50 -->
                                                    <!-- ngIf: item.ID>=40 -->
                                                    <i class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=40 -->
                                                    <!-- ngIf: item.ID>=30 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=30 -->
                                                    <!-- ngIf: item.ID>=20 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=20 -->
                                                    <!-- ngIf: item.ID>=10 -->
                                                    <i  class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=10 -->
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- ngRepeat: item in dataStar track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="4_star" type="checkbox" class="ng-untouched ng-valid ng-dirty" />
                                            <label for="4_star">
                                                <span class="stars" style="color: #fdbf65;">
                                                    <!-- ngIf: item.ID>=50 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=50 -->
                                                    <!-- ngIf: item.ID>=40 -->
                                                    <i class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=40 -->
                                                    <!-- ngIf: item.ID>=30 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=30 -->

                                                    <!-- ngIf: item.ID>=10 -->
                                                    <i ng-if="item.ID>=10" class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=10 -->
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- ngRepeat: item in dataStar track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="3_star" type="checkbox" class="ng-untouched ng-valid ng-dirty" />
                                            <label for="3_star">
                                                <span class="stars" style="color: #fdbf65;">
                                                    <!-- ngIf: item.ID>=50 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=50 -->
                                                    <!-- ngIf: item.ID>=40 -->
                                                    <i class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=40 -->
                                                    <!-- ngIf: item.ID>=40 -->
                                                    <i class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=40 -->

                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- ngRepeat: item in dataStar track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="2_star" type="checkbox" class="ng-untouched ng-valid ng-dirty" />
                                            <label for="2_star">
                                                <span class="stars" style="color: #fdbf65;">
                                                    <!-- ngIf: item.ID>=50 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=50 -->
                                                    <!-- ngIf: item.ID>=40 -->
                                                    <i class="fa fa-star star ng-scope"></i>
                                                    <!-- end ngIf: item.ID>=40 -->


                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- ngRepeat: item in dataStar track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="1_star" type="checkbox" class="ng-untouched ng-valid ng-dirty" />
                                            <label for="1_star">
                                                <span class="stars" style="color: #fdbf65;">
                                                    <!-- ngIf: item.ID>=50 -->
                                                    <i class="fa fa-star star ng-scope" ></i>
                                                    <!-- end ngIf: item.ID>=50 -->
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--   khu vực-->
                            @php
                                 $locations = \App\Models\Locale::where('status',1)->get();
                            @endphp
                            <div class="filter-section" >
                                <div class="filter-menu"><span class="filter-title">Khu vực</span></div>
                                <div class="filter-items" >
                                    @foreach($locations as $key_location => $location)
                                    <!-- ngRepeat: item in dataLocation  | limitTo:limitItemLocation track by $index -->
                                    <div  class="filter-item location-filter ng-scope">
                                        <div class="md-checkbox">
                                            <input id="location_{{$location->id}}" name="locale[]" value="{{$location->id}}" type="checkbox" class="ng-pristine ng-untouched ng-valid" />
                                            <label class="area-content">
                                                <label for="location_{{$location->id}}" class="ng-binding">
                                                    <span class="icon-wrapper"></span> {{$location->title}}

                                                </label>
                                                <!-- ngIf: item.ShortDes -->
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- end ngRepeat: item in dataLocation  | limitTo:limitItemLocation track by $index -->

                                </div>
                            </div>
                            <!--   khu vực-->
                            @php
                                $categorys = \App\Models\Category::where('status',1)->get();
                            @endphp
                            <!--   loại hình-->
                            <div class="filter-section" >
                                <div class="filter-menu"><span class="filter-title">Loại hình nơi ở</span></div>
                                <div class="filter-items" >
                                    @foreach($categorys as $key_categorys =>$category)
                                    <!-- ngRepeat: item in dataHotelClass  | limitTo:limitItemHotelClass track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="category_{{$category->id}}" name="category[]" value="{{$category->id}}" type="checkbox" class="ng-pristine ng-untouched ng-valid" />
                                            <label for="category_{{$category->id}}" class="ng-binding"> <span class="icon-wrapper"></span> {{$category->title}} </label>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                            </div>
                            @php
                                $groups = \App\Models\Group::where('status',1)->get();
                            @endphp
                            <!--   loại hình-->
                            <div class="filter-section" >
                                <div class="filter-menu"><span class="filter-title">Loại phòng</span></div>
                                <div class="filter-items" >
                                    @foreach($groups as $key_groups =>$group)
                                    <!-- ngRepeat: item in dataHotelClass  | limitTo:limitItemHotelClass track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="group_{{$group->id}}" name="group[]" value="{{$group->id}}" type="checkbox" class="ng-pristine ng-untouched ng-valid" />
                                            <label for="group_{{$group->id}}" class="ng-binding"> <span class="icon-wrapper"></span> {{$group->title}} </label>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                            </div>
                            <button class="btn btn-action btn-block search-button btn-big" >
                                <b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
                            </button>
                        </div>
                    </div>
                </div>
                <!--    danh sách sản phẩm-->
                <div class="col-xs-12 col-md-9 main-content">
                    <div class="row lts-product-load-item">
                        <!-- ngIf: IsLoadInit -->
                        @if (isset($items_prd) && count($items_prd) > 0)
                            <!-- ngRepeat: item in hotels track by $index -->
                            @foreach ($items_prd as $item)
                            <div class="hotel-item__wrapper ng-scope combo">
                                <a  class="hotel-item__a " style="width: 100%" href="/item-list/{{isset($item->slug) ? $item->slug : $item->url}}">
                                    <div class="hotel-item">
                                        <!--   ảnh-->
                                        <div class="left">
                                            <div class="img-wrapper">
                                                <div class="image"
                                                     style="background-image: url('{{ isset($item->image)?\App\Library\Files::media($item->image) : null }}');">

                                                </div>
                                            </div>
                                        </div>
                                        <!--   thông tin-->
                                        <div class="center">
                                            <div class="header">
                                                <p class="name limit-length ng-binding">
                                                    {{isset($item->title) ? $item->title : null}}
                                                </p>
                                                <p class="name">
                                                    <!-- ngIf: item.Rating != -1 -->
                                                    <span class="stars ng-scope">
                                                        <!-- ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <!-- ngIf: item.Rating % 10 > 0 -->
                                                    </span>

                                                </p>
                                                <p class="address limit-length ng-binding">
                                                    <i class="fa fa-map-marker"></i> {{isset($item->locale) ? $item->locale->title : null}}
                                                </p>
                                            </div>

                                            <div class="highlights">
                                                <!-- end ngIf: item.StyleTag.length>0 -->
                                                <!-- ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                                                <div class="hightlight ng-scope" >
                                                    <div class="pill-container pill-primary">
                                                        <div class="pill-title">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <!-- ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                                        <div class="pill-item ng-binding ng-scope" >
                                                            {{isset($item->category) ? $item->category->title : null}}
                                                        </div>
                                                        <div class="pill-item ng-binding ng-scope" >
                                                            -
                                                        </div>
                                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                                        <div class="pill-item ng-binding ng-scope" >
                                                            {{isset($item->group) ? $item->group->title : null}}
                                                        </div>
                                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->

                                                    </div>
                                                </div>
                                                <!-- end ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                                            </div>
                                        </div>
                                        <!--  giá-->
                                        <div class="right" >
                                            <div class="pricing">
                                                <div class="pricing__group">
                                                    <span class="price old">
                                                        @if (isset($item->price_old) && (int)$item->price_old > 0)
                                                            <strike>{{number_format($item->price_old)}} ₫</strike>
                                                        @endif
                                                    </span>

                                                    <p class="price primary" >
                                                        <strong>{{number_format($item->price)}} ₫</strong>
                                                    </p>
                                                    <button class="btn btn-action btn-block btn-success btn-big " style="margin-top: 8px">
                                                        <b> Chi tiết</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            <!-- end ngRepeat: item in hotels track by $index -->

                        @endif

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                            <div class="place-empty ng-hide" ng-show="!loading &amp;&amp; hotels.length == 0 &amp;&amp; isFilter">
                                Rất tiếc, không tìm thấy khách sạn nào trong này.<br />
                                Vui lòng thử lại hoặc liên hệ HOTLINE <a class="bind-list-hotel-hotline" href="tel:19002045"><span class="display-text">1900 2045</span></a> để được hỗ trợ.
                            </div>

                            <div id="page-holder"></div>
                            <div class="more-product col-xs-12 text-center v-margin-top-15" id="page-pager">
                                <a href="{{\Request::fullUrl()}}" class="btn btn-default btn-lg btn-load-more mt-3" id="paginate">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- seo description-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing vspacingbottom15">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 subcribePromotionDiv bg-info vspacingtop15 vspacingbottom15">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing vspacingtop15 vspacingbottom15">
                        <div class="col-xs-12 vremoveSpacing summary">

                        </div>
                    </div>
                </div>
            </div>

            <!--BEGIN PREDICT GUEST-->
            <style>
                .title-predict {
                    font-size: 14px;
                    font-weight: bold;
                    padding: 4px 8px;
                    background-color: #dddddd;
                }
                .item-place-predict {
                    font-size: 14px;
                    font-weight: bold;
                    padding: 4px 8px;
                }
            </style>

        </div>
    </div>
</div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
<script>
    var page = 1;
    // $('body').on('click','#paginate',function(e){
    $("#paginate").click(function (e) {
        e.preventDefault();
        console.log(333);
        var url = $(this).attr('href');
        page++;
        load_more_prd(page,url);
    })
    function load_more_prd(page,url) {
        $.ajax({
            url: url+'?page=' + page,
            type: "get",
            datatype: "html",
            beforeSend: function() {

            },
            success: function(data) {
                if (data.status == 0) {
                    $(".more-product").hide();
                }
                $(".lts-product-load-item").append(data);
            },
            complete: function() {

            }
        })
    }
    $( document ).ready(function() {

    });
    $(document).ready(function () {
        $('.search-button').on('click', function () {
            var selectedCategories = [];
            var selectedGroups = [];
            var selectedLocales = [];

            $('input[name="category[]"]:checked').each(function () {
                selectedCategories.push($(this).val());
            });
            // Lấy các giá trị được chọn từ checkbox Loại phòng
            $('input[name="group[]"]:checked').each(function () {
                selectedGroups.push($(this).val());
            });
            $('input[name="locale[]"]:checked').each(function () {
                selectedLocales.push($(this).val());
            });

            // Cập nhật URL với các lựa chọn được chọn
            var searchParams = new URLSearchParams();
            if (selectedCategories.length > 0) {
                searchParams.set('categories', selectedCategories.join(','));
            }
            if (selectedGroups.length > 0) {
                searchParams.set('groups', selectedGroups.join(','));
            }
            if (selectedLocales.length > 0) {
                searchParams.set('locales', selectedLocales.join(','));
            }
            // Thay thế URL hiện tại với URL mới chứa các lựa chọn
            var newUrl = window.location.pathname + '?' + searchParams.toString();
            window.location.replace(newUrl);

            // Tại đây, bạn có thể gửi yêu cầu AJAX hoặc xử lý dữ liệu không cần gửi yêu cầu
        });
    });
</script>
@endsection
