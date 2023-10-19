@extends('frontend.layouts.master')
@section('content')
    <style>

        .room-detail.owl-theme .item{
            position: relative;
            padding-bottom: 50%;
        }
        .room-detail.owl-theme .item img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .room-detail-thumbs{
            margin-top: 8px;

        }
        .room-detail-thumbs .owl-thumb-item{
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
        }
        .room-detail-thumbs .owl-thumb-item:hover{
            opacity: .6;
            transition: .2s;
        }
        .room-detail-thumbs.owl-thumbs .owl-thumb-item{
            position: relative;
            padding-bottom: 100%;
        }
        .room-detail-thumbs.owl-thumbs .owl-thumb-item img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <section class="htdt-container ng-scope">
        <!-- BEGIN BREAKCUMB -->
{{--        <div class="hidden-xs">--}}
{{--            <section class="container">--}}
{{--                <ul class="breadcrumb">--}}
{{--                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">--}}
{{--                        <a href="//www.ivivu.com" itemprop="url">--}}
{{--                            <span itemprop="title">Trang chủ</span>--}}
{{--                        </a>--}}
{{--                        <span class="divider"></span>--}}
{{--                    </li>--}}
{{--                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">--}}
{{--                        <a slug="true" href="//www.ivivu.com/khach-san-viet-nam" itemprop="url">--}}
{{--                            <span itemprop="title">Việt Nam</span>--}}
{{--                        </a>--}}
{{--                        <span class="divider"></span>--}}
{{--                    </li>--}}
{{--                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">--}}
{{--                        <a slug="true" href="//www.ivivu.com/khach-san-da-lat" itemprop="url">--}}
{{--                            <span itemprop="title">Đà Lạt</span>--}}
{{--                        </a>--}}
{{--                        <span class="divider"></span>--}}
{{--                    </li>--}}
{{--                    <li class="active">--}}
{{--                        <span>Khu nghỉ dưỡng Mercure Đà Lạt</span>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </section>--}}
{{--        </div>--}}
        <!-- END BREAKCUMB -->
        <!-- BEGIN HOTEL -->
        <section class="htdt-container container dt-container" style="margin-top: 20px">
            <aside class="htdt-left col-xs-12 col-sm-12 col-md-9 col-lg-9 pull-right vremovePadding-min-md">
                <input type="hidden" id="hotel-code-detail" value="mercure-dalat-resort" />
                <section class="container col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding padlr-bg-white-15">
                    <div class="col-xs-12 no-padding hotel-header">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 hotel-information">
                                <h1 class="title" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="{{isset($data->title) ? $data->title : null}}">
                                    <span id="hotel-name-detail">{{isset($data->title) ? $data->title : null}}</span>
                                    <span class="icons favourite" data-toggle="tooltip" title="" data-original-title="{{isset($item->title) ? $item->title : null}}">
                                </span>
                                </h1>
                                <div class="col-xs-12 no-padding score-container v-margin-bottom-10">
                                    <span class="icons stars v-margin-right-15">
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                    </span>
                                    <span class="score-container__inner" data-toggle="tooltip" title="" data-original-title="Click để xem đánh giá">
                                    <span class="score"> {{isset($data->group) ? $data->group->title : null}}</span>
                                    <span class="score-description" style="margin-left: 8px">{{isset($data->category) ? $data->category->title : null}} </span>
                                </span>
                                </div>

                                <p class="address description htldtl-address hidden-xs">
                                    <b> <i class="fas fa-map-marker-alt"></i> {{isset($data->locale) ? $data->locale->title : null}}</b>

                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 hotel-reservation hidden-xs" id="giaiaimin" style="">
                                <!-- ngIf: RoomsPrice.Isshowprices==1 -->
                                <div class="col-xs-12 col-sm-12 no-padding hotel-reservation__price ng-scope" id="show_prices_datat">
                                    <span class="price-description hidden-xs">Giá chỉ từ</span>
                                    <p class="price" id="minprices_data">

                                        <!-- ngIf: RoomsPrice!=undefined && RoomsPrice.RoomClasses.length>0 && RoomsPrice.RoomClasses[0].MealTypeRates.length>0 -->
                                        <span class="ng-binding ng-scope">
                                             @if (isset($data->price_old) && (int)$data->price_old > 0)
                                                <strike style="color: grey;font-size: 12px">{{number_format($data->price_old)}} ₫</strike>
                                            @endif
                                           {{number_format($data->price)}} <span class="currency"> VND</span>
                                        </span>
                                        <!-- end ngIf: RoomsPrice!=undefined && RoomsPrice.RoomClasses.length>0 && RoomsPrice.RoomClasses[0].MealTypeRates.length>0 -->
                                    </p>
                                </div>
                                <!-- end ngIf: RoomsPrice.Isshowprices==1 -->
                                <div class="col-xs-12 col-sm-12 no-padding hotel-reservation__actions hidden-xs have-price">
                                    @if(auth()->guard('frontend')->check())
                                        <a href="/cart/{{$data->id}}"  class="btn btn-block btn-action btn-book">Đặt ngay</a>
                                    @else
                                        <a href="javascript:void(0)"  class="btn btn-block btn-action btn-book" onclick="showLoginDialog()">Đặt ngay</a>


                                    @endif
                                    <!-- <button class="btn btn-warning btn-action btn-block  btn-lg btn-rounded btn-select-room-now visible-xs">CHỌN PHÒNG NGAY <i class="fa fa-arrow-down"></i></button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="htdt-slider col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="owl-carousel owl-theme room-detail">
                                @if (isset($data) && isset($data->image_detail) && $data->image_detail != null)
                                    @foreach (json_decode($data->image_detail) as $item)
                                        <div class="item">
                                            <img  src="{{ \App\Library\Files::media($item) }}">
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="owl-carousel owl-thumbs room-detail-thumbs">
                                @if (isset($data) && isset($data->image_detail) && $data->image_detail != null)
                                    @foreach (json_decode($data->image_detail) as $item)
                                        <div class="owl-thumb-item">
                                            <img  src="{{ \App\Library\Files::media($item) }}">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                </section>


                <section class="htdt-description clearfix bg-white br-8 pad-tb-15 mrg-b-15">
                    {!! $data->description !!}
                </section>
                <section class="htdt-description clearfix bg-white br-8 pad-tb-15 mrg-b-15">
                    {!! $data->content !!}
                </section>

{{--                <section id="review" class="htdt-review clearfix bg-white br-8 mrg-b-15 pad-tb-15 customerReview">--}}
{{--                    <article class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mrg-b-15">--}}
{{--                        <p class="hotelDetailTitle">Đánh giá khách hàng về Khu nghỉ dưỡng Mercure Đà Lạt</p>--}}
{{--                    </article>--}}
{{--                    <div class="vspacing10"><br /></div>--}}

{{--                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewHeader">--}}
{{--                        <span class="scoreSpan" itemprop="ratingValue">9.7 /10</span>--}}
{{--                        <span class="scoreStatus">Tuyệt vời </span>--}}

{{--                        <span class="scoreReviewQuantity verticalLine"><span itemprop="reviewCount">71</span> đánh giá</span>--}}
{{--                        <br />--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                        <br />--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing10">--}}
{{--                        <span class="recentReviews">--}}
{{--                            Đánh giá gần đây--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="nopadding col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetailContainer">--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetail mrg-lr-mb-0">--}}
{{--                            <div class="horizontalLine"></div>--}}
{{--                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3 customerReviewName">--}}
{{--                                        <span class="glyphicon glyphicon-user"></span>--}}
{{--                                        <span> Nguyễn Thanh Thoại</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3">--}}
{{--                                        <span class="scoreSpan">10.0</span>--}}
{{--                                        <span class="scoreStatus">Tuyệt vời </span>--}}
{{--                                        <span class="scoreReviewDate">20-09-2023</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetail mrg-lr-mb-0">--}}
{{--                            <div class="horizontalLine"></div>--}}
{{--                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3 customerReviewName">--}}
{{--                                        <span class="glyphicon glyphicon-user"></span>--}}
{{--                                        <span> Lê Đức Toàn</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3">--}}
{{--                                        <span class="scoreSpan">10.0</span>--}}
{{--                                        <span class="scoreStatus">Tuyệt vời </span>--}}
{{--                                        <span class="scoreReviewDate">18-09-2023</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                                    <span class="customerReviewContent">--}}
{{--                                        <span style="white-space: pre-line;"> Resort rất đẹp, nhân viên thân thiện, nhiệt tình. Đáng để đi lại nhiều lần. </span>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetail mrg-lr-mb-0">--}}
{{--                            <div class="horizontalLine"></div>--}}
{{--                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3 customerReviewName">--}}
{{--                                        <span class="glyphicon glyphicon-user"></span>--}}
{{--                                        <span> Tran Phuong Thao</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3">--}}
{{--                                        <span class="scoreSpan">10.0</span>--}}
{{--                                        <span class="scoreStatus">Tuyệt vời </span>--}}
{{--                                        <span class="scoreReviewDate">13-09-2023</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                                    <span class="customerReviewContent">--}}
{{--                                        <span style="white-space: pre-line;"> Hài lòng về dịch vụ iVIVU và khách sạn. Bạn nhân viên iVIVU tư vấn và hỗ trợ mình nhiệt tình, nhanh chóng.</span>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetail mrg-lr-mb-0">--}}
{{--                            <div class="horizontalLine"></div>--}}
{{--                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3 customerReviewName">--}}
{{--                                        <span class="glyphicon glyphicon-user"></span>--}}
{{--                                        <span> Nguyễn Thị Tuyết Nhung</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3">--}}
{{--                                        <span class="scoreSpan">10.0</span>--}}
{{--                                        <span class="scoreStatus">Tuyệt vời </span>--}}
{{--                                        <span class="scoreReviewDate">06-09-2023</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                                    <span class="customerReviewContent">--}}
{{--                                        <span style="white-space: pre-line;"> Chuyến đi ok, chất lượng dịch vụ tại khách sạn tốt. Bạn nhân viên iVIVU tư vấn và hỗ trợ mình nhiệt tình.</span>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 customerReviewDetail mrg-lr-mb-0">--}}
{{--                            <div class="horizontalLine"></div>--}}
{{--                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3 customerReviewName">--}}
{{--                                        <span class="glyphicon glyphicon-user"></span>--}}
{{--                                        <span> Nguyễn Thị Tuyết Nhung</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacing3">--}}
{{--                                        <span class="scoreSpan">10.0</span>--}}
{{--                                        <span class="scoreStatus">Tuyệt vời </span>--}}
{{--                                        <span class="scoreReviewDate">05-09-2023</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                                    <span class="customerReviewContent">--}}
{{--                                        <span style="white-space: pre-line;"> Khu nghỉ dưỡng Mercure Đà Lạt dịch vụ tốt. Bạn nhân viên iVIVU tư vấn và hỗ trợ nhiệt tình.</span>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </section>--}}

            </aside>

            <aside class="htdt-right col-xs-12 col-sm-12 col-md-3 col-lg-3 pull-left nopadding">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingtop4 vspacingbottom15 tourRecommendedPanel recomment-hotel">
                    <br />
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                        <div class="tourPanelHeading">
                            <h4>Khách sạn tương tự</h4>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing hidden-xs">
                            <div class="horizontalLine2"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing lastViewedHotelPanel">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing vspacingtop10 lastViewedHotels hidden-xs">
                                    @foreach($items_prd as $key_prd => $item_prd)
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing lastViewedItem">
                                        <div class="media">
                                            <span class="media-left">
                                                <a href="{{isset($item_prd->slug) ? $item_prd->slug : $item_prd->url}}">
                                                    <img class="img-rounded" src="{{ isset($item_prd->image)?\App\Library\Files::media($item_prd->image) : null }}" />
                                                </a>
                                            </span>
                                            <div class="media-body">
                                                <h4>
                                                    <a href="{{isset($item_prd->slug) ? $item_prd->slug : $item_prd->url}}">
                                                        {{isset($item_prd->title) ? $item_prd->title : null}}<i class="sprites v-icn-star-40 hotelItemRatingIcon"></i>
                                                    </a>
                                                </h4>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing hotelItemReviews">
                                                    <span class="review-score font-bold color-white br-4">{{isset($item_prd->group) ? $item_prd->group->title : null}}</span>
                                                    <strong class="review-text font-bold">{{isset($item_prd->category) ? $item_prd->category->title : null}}</strong>
                                                    <br>
                                                    <i class="fas fa-map-marker-alt"></i><a href="#" class="review-count" style="margin-left: 8px">{{isset($item_prd->locale) ? $item_prd->locale->title : null}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="clearfix"></div>
            <div class="visible-xs breadcrumb-m">
                <section class="container">
                    <ul class="breadcrumb">
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="//www.ivivu.com" itemprop="url">
                                <span itemprop="title">Trang chủ</span>
                            </a>
                            <span class="divider"></span>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a slug="true" href="//www.ivivu.com/khach-san-viet-nam" itemprop="url">
                                <span itemprop="title">Việt Nam</span>
                            </a>
                            <span class="divider"></span>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a slug="true" href="//www.ivivu.com/khach-san-da-lat" itemprop="url">
                                <span itemprop="title">Đà Lạt</span>
                            </a>
                            <span class="divider"></span>
                        </li>
                        <li class="active">
                            <span>Khu nghỉ dưỡng Mercure Đà Lạt</span>
                        </li>
                    </ul>
                </section>
            </div>
        </section>

        <!-- END HOTEL -->
    </section>

@endsection
{{-- Scripts Section --}}
@section('scripts')
    <script>

        $(document).ready(function () {
                var owl = $('.owl-theme');
                owl.owlCarousel({
                    items: 1, // Chỉ hiển thị một slide trong carousel chính
                    loop: false,
                    margin: 10,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true
                });

                // Liên kết carousel chính với các thumbnail
                var thumbs = $('.owl-thumbs');
                thumbs.owlCarousel({
                    items: 8, // Chỉ hiển thị hai thumbnails
                    loop: false,
                    margin: 10,
                    autoplay: false,
                    nav: false,
                    dots: false
                });

                // // Đồng bộ slide chính với thumbnails
                thumbs.on('click', '.owl-item', function (e) {
                    e.preventDefault();
                    console.log($(this))
                    var index = $(this).index();
                    console.log(index)
                    owl.trigger('to.owl.carousel', [index, 300]);
                });
        });
    </script>
@endsection
