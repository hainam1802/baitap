@extends('frontend.layouts.master')
@section('content')

<div class="list-content clearfix" >
    <div class="content-hotel">
        <!--   tiêu đề-->
        <div class="container">
            <div class="hotelListHeadLine">
                <h1 class="hotelName vspacingbottom15 hidden-xs">
                    Khách sạn Đà Lạt
                    <span id="list-nameregion" style="display: none;">Đà Lạt</span>
                    <div class="visible-xs visible-sm">
                        <div class="vspacingbottom5"></div>
                    </div>
                </h1>
            </div>
            <div class="row">
                <!--   trái-->
                <div class="col-xs-12 col-md-3 sidebar-left">
                    <!--   hỗ trợ-->
                    <div class="cs hidden-xs">
                        <div class="cs__header">
                            <div class="img-wrapper">
                                <img class="img" src="//cdn1.ivivu.com/iVivu/2018/12/05/10/undefined-2.png" alt="Avatar" />
                            </div>
                        </div>
                        <div class="cs__text">
                            <h5 class="cs__text__title">Cần hỗ trợ?</h5>
                            <div class="contact">
                                <div class="region">
                                    HCM
                                </div>
                                <div class="phone">
                                    <a href="tel:1900 1870">
                                        1900 1870
                                    </a>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="region">
                                    HN
                                </div>
                                <div class="phone">
                                    <a href="tel:1900 2045">
                                        1900 2045
                                    </a>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="region">
                                    CT
                                </div>
                                <div class="phone">
                                    <a href="tel:1900 2087">
                                        1900 2087
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <button class="btn btn-default" ng-click="applyWatchKeword()"><i class="fas fa-search"></i></button>
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
                                                    <i ng-if="item.ID>=10" class="fa fa-star star ng-scope"></i>
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

                                </div>
                            </div>
                            <!--   khu vực-->
                            <div class="filter-section" >
                                <div class="filter-menu"><span class="filter-title">Khu vực</span></div>
                                <div class="filter-items" ng-init="limitItemLocation=6;  maxLenLocation = 5">
                                    <!-- ngRepeat: item in dataLocation  | limitTo:limitItemLocation track by $index -->
                                    <div  class="filter-item location-filter ng-scope">
                                        <div class="md-checkbox">
                                            <input id="Bảo Lộc" type="checkbox" class="ng-pristine ng-untouched ng-valid" />
                                            <label class="area-content">
                                                <label for="Bảo Lộc" class="ng-binding">
                                                    <span class="icon-wrapper"></span> Bảo Lộc
                                                    <!-- ngIf: item.TotalHotels>0 -->
                                                    <span class="ng-binding ng-scope">(2)</span>
                                                    <!-- end ngIf: item.TotalHotels>0 -->
                                                </label>
                                                <!-- ngIf: item.ShortDes -->
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end ngRepeat: item in dataLocation  | limitTo:limitItemLocation track by $index -->

                                </div>
                            </div>
                            <input type="hidden" ng-init="dataTags=[]" />
                            <!--   loại hình-->
                            <div class="filter-section" >
                                <div class="filter-menu"><span class="filter-title">Loại hình nơi ở</span></div>
                                <div class="filter-items" >
                                    <!-- ngRepeat: item in dataHotelClass  | limitTo:limitItemHotelClass track by $index -->
                                    <div class="filter-item ng-scope">
                                        <div class="md-checkbox">
                                            <input id="Khu nghỉ dưỡng (Resort)" type="checkbox" class="ng-pristine ng-untouched ng-valid" />
                                            <label for="Khu nghỉ dưỡng (Resort)" class="ng-binding"> <span class="icon-wrapper"></span> Khu nghỉ dưỡng (Resort) </label>
                                        </div>
                                    </div>

                                    <!-- end ngRepeat: item in dataHotelClass  | limitTo:limitItemHotelClass track by $index -->
                                    <div class="filter-show-more">
                                        <!-- ngIf: limitItemHotelClass<12 -->
                                        <p class="filter-close ng-scope" ng-click="loadMoreItemFilter('limitItemHotelClass', maxLenHotelClass)" ng-if="limitItemHotelClass<12"><i class="vicon vicon-icon-arrow-down"></i> Xem thêm</p>
                                        <!-- end ngIf: limitItemHotelClass<12 -->
                                        <!-- ngIf: limitItemHotelClass==12 && 12>6 -->
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-action btn-block search-form-button btn-big" >
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
                        <div style="">
                            <!-- ngRepeat: item in hotels track by $index -->
                            @foreach ($items_prd as $item)
                            <div class="hotel-item__wrapper ng-scope combo">
                                <a target="_blank" class="hotel-item__a" href="/khach-san-da-lat/mercure-dalat-resort">
                                    <div class="hotel-item">
                                        <!--   ảnh-->
                                        <div class="left">
                                            <div class="img-wrapper">
                                                <div class="image"  style="background-image: url('//cdn1.ivivu.com/iVivu/2022/06/30/12/hinhdaidien-374x280.webp?o=jpg');"></div>
                                            </div>
                                        </div>
                                        <!--   thông tin-->
                                        <div class="center">
                                            <div class="header">
                                                <p class="name limit-length ng-binding">
                                                    {{$item->title}}
                                                </p>
                                                <p class="name">
                                                    <!-- ngIf: item.Rating != -1 -->
                                                    <span ng-if="item.Rating != -1" class="stars ng-scope">
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
                                                    <!-- end ngIf: item.Rating != -1 -->
                                                    <!-- ngIf: item.IsTop -->
                                                    <i ng-if="item.IsTop" class="fa fa-heart heart ng-scope"></i>
                                                    <!-- end ngIf: item.IsTop -->
                                                    <!-- ngIf: item.Point != '0.0' -->
                                                    <span ng-if="item.Point != '0.0'" onclick="location.href=''" class="review-small ng-scope">
                                                        <span class="review-score ng-binding">9.7</span>
                                                        <span class="review-text ng-binding">Tuyệt vời</span>
                                                        <span class="review-count ng-binding"> | 71 đánh giá</span>
                                                    </span>
                                                    <!-- end ngIf: item.Point != '0.0' -->
                                                </p>
                                                <p class="address limit-length ng-binding"><i class="fa fa-map-marker"></i> 03 Nguyễn Du, Phường 9 - <b>Xem bản đồ</b></p>
                                            </div>

                                            <div class="highlights">
                                                <!-- end ngIf: item.StyleTag.length>0 -->
                                                <!-- ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                                                <div class="hightlight ng-scope" ng-if="item.Facilities.length>0 &amp;&amp; item.Facilities[0].Name!=''">
                                                    <div class="pill-container pill-primary">
                                                        <div class="pill-title">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <!-- ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                                        <div class="pill-item ng-binding ng-scope" >
                                                            Biệt thự nghỉ dưỡng
                                                        </div>
                                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                                        <div class="pill-item ng-binding ng-scope" >
                                                            Thiết kế ấn tượng
                                                        </div>
                                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->

                                                    </div>
                                                </div>
                                                <!-- end ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                                            </div>
                                        </div>
                                        <!--  giá-->
                                        <div class="right">
                                            <div class="pricing">
                                                <div class="pricing__group">
                                                    <p class="price primary" >
                                                        <span class="price-num ng-binding">
                                                            2.461.000 VND
                                                        </span>
                                                    </p>
                                                    <!-- ngIf: LoadingFinish && UserTypes.isAgent && item.availableNo!=undefined -->
                                                    <p class="price primary ng-hide">
                                                        <span class="price-num ng-binding">
                                                            2.461.000 VND
                                                        </span>
                                                    </p>
                                                    <!-- ngIf: LoadingFinish && (item.IsShowPrice==2 || item.IsShowPrice==0&&!IsShowPrice) &&!(UserTypes.isMember && UserTypes.memberInfo.showPrice==1) && item.priceOta !=undefined -->
                                                    <p class="price primary ng-hide">
                                                        <span class="price-num"><i class="vicon vicon-alarm-clock"></i> Hết phòng</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            <!-- end ngRepeat: item in hotels track by $index -->

                        </div>
                        @endif

                        </div>
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
            <!--BEGIN PREDICT GUEST-->

            <!-- Modal from button Lấy giá tốt -->

            <div class="modal fade findDealForCustomerModal" id="findDealForCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" style="padding-left: 15px; text-transform: uppercase;">
                                ĐẶT PHÒNG ĐOÀN
                                <i
                                        class="glyphicon glyphicon-info-sign fixGlyphicon vcolor-primary hidden-sm hidden-md hidden-lg"
                                        style="font-size: 14px;"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title=""
                                        data-original-title="iVIVU.com sẽ tìm kiếm những deal tốt nhất (khách sạn giá tốt nhất và tour giá tốt nhất) và
                            gửi đến địa chỉ mail của khách hàng dựa vào thông tin mà khách hàng cung cấp."
                                ></i>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 findDealForCustomerHeading vspacingbottom15">
                                <p class="hidden-xs">Khi đặt phòng theo đoàn với iVIVU.com, bạn sẽ có được <b>khách sạn phù hợp nhất</b> với <b>giá tốt nhất</b> mà <b>không phải tốn thời gian tìm kiếm</b>.</p>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                    <div class="form-group vspacingbottom25">
                                        <label class="control-label"> <i class="glyphicon glyphicon-home hidden"></i> Yêu cầu </label>
                                        <div class="findDealForCustomerStyleCheckbox">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <textarea id="typehotel" name="typehotel" class="form-control" rows="3" style="resize: vertical;" placeholder="Địa điểm, thời gian đặt phòng, số lượng thành viên của đoàn..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group vspacingbottom15">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 vspacingbottom15">
                                                <div style="position: relative;">
                                                    <label for="findDealForCustomerPhone" class="control-label"><i class="glyphicon glyphicon glyphicon-earphone hidden"></i> Điện thoại </label>

                                                    <div class="div-phone">
                                                        <input
                                                                type="tel"
                                                                class="form-control"
                                                                id="findDealForCustomerPhone"
                                                                name="phone"
                                                                placeholder="Số điện thoại"
                                                                onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"
                                                        />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="div-email" style="position: relative;">
                                                    <label for="findDealForCustomerEmail" class="control-label"> <i class="glyphicon glyphicon-send hidden"></i> Email </label>
                                                    <i class="vcolor-danger" style="font-size: 28px; position: absolute;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bắt buộc nhập">*</i>
                                                    <div>
                                                        <input type="text" class="form-control" id="findDealForCustomerEmail" name="email" placeholder="Địa chỉ email" maxlength="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--if have any error, set class has-error, if not, dont -->
                                    <div class="alert alert-danger" role="alert" style="display: none;">
                                        <div class="pre-place" style="display: none;">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong>
                                            Vui lòng nhập địa điểm.
                                        </div>
                                        <div class="pre-email">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong>
                                            Chưa nhập địa chỉ email hoặc địa chỉ email chưa đúng
                                        </div>
                                        <div class="pre-phone" style="display: none;">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong>
                                            Vui lòng nhập số điện thoại.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom10">
                                <div class="findDealForCustomerGuarantee hidden">
                                    • iVIVU.com cam kết đảm bảo an toàn thông tin của quý khách hàng. <br />
                                    • Quý khách hàng có thể yêu cầu ngưng dịch vụ tìm kiếm deal tốt nhất bất cứ lúc nào.
                                </div>

                                <button
                                        type="button"
                                        class="btn btn-warning btn-block btn-lg vbackground-warning"
                                        id="findDealForCustomerButton"
                                        onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'Đăng ký tìm kiếm deal', 'eventAction': 'Click', 'eventLabel': 'Đăng ký tìm kiếm deal' });"
                                >
                                    Đặt phòng đoàn
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end modal from button lấy giá tốt-->

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
</script>
@endsection
