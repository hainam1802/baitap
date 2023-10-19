@extends('frontend.layouts.master')
@section('content')
<div class="main-home" >
    <div class="col-xs-12 no-padding">
        <div class="hero-container" id="hero-banner-home"style="background-image:url(https://cdn1.ivivu.com/images/2023/08/17/16/fourseason_nha-t_zag1p2_horizontal.webp); cursor: pointer;" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-lg-8 no-padding">
                            <div class="col-xs-12 no-padding hero-form" id="hero-form">
                                <div class="col-xs-12 no-padding">
                                    <h1 class="hero-heading hero-heading-1">Trải nghiệm kỳ nghỉ tuyệt vời</h1>
                                    <h2 class="hero-heading hero-heading-2 hidden-xs">Combo khách sạn - vé máy bay - đưa đón sân bay giá tốt nhất</h2>
                                    <h2 class="hero-heading hero-heading-2 visible-xs">Combo khách sạn - vé máy bay - đưa đón tốt nhất</h2>
                                </div>
                                <div class="col-xs-12 search-form home-page">
                                    <div class="row">
                                        <div class="col-xs-12 v-margin-bottom-15 typeahead-container search-fullframe">
                                            <div class="col-xs-12 no-padding v_field ">
                                                <div class="input-icon" style="position:absolute;" >
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <select id="searchSelect" name="locale[]" style="padding-left:50px" type="text" class="form-control v_field__input search-input typeahead" placeholder="Bạn muốn đi đâu?">
                                                    <option value="0">Bạn muốn đi đâu?</option>
                                                    @foreach($locations as $location)
                                                     <option value="{{$location->id}}">{{$location->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-10 v-margin-bottom-15 typeahead-container search-fullframe">
                                            <div class="col-xs-12 no-padding v_field ">
                                                <div class="input-icon" style="position:absolute;" >
                                                    <i class="fas fa-search-location"></i>
                                                </div>
                                                <input id="searchText" style="padding-left:50px" type="text" class="form-control v_field__input search-input typeahead" placeholder="Nhập địa điểm bạn muốn đi?">

                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-2 ">
                                            <button class="btn btn-action btn-block  search-button btn-big" style="height: 60px">
                                                <b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 hidden-xs" style="height:100px">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HOME SEARCH -->
    <div class="container mainContainer">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mainContent">

            <!-- BEGIN MOST INTERESTING HOTELS -->
            <p class="top-sale visible-xs row" ><img ng-cloak width="20" style="vertical-align: text-bottom;" src="https://res.ivivu.com/hotel/img/fire-sale.svg" /><span >3 khách đã đặt phòng trong 24h qua</span></p>
            <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30 visible-xs">
                <div class="col-xs-12 no-padding heading">
                    <h2 class="heading__title">
                        Combo tốt nhất hôm nay
                    </h2>
                    <p class="heading__description">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
                </div>
                <div class="col-xs-12 no-padding promotion-cards">
                    <div class=" item-placeholder-loading item-placeholder-loading__flash" style="border-radius:6px;">
                    </div>
                    <div class="col-xs-12 no-padding owl-carousel owl-carousel-promotion owl-theme">
                        <div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-hoi-an/khu-nghi-duong-the-nam-hai-hoi-an" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/16/fourseason_nha-mb_u5n8ii_vertical.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-nha-trang/khu-nghi-duong-radisson-blu-cam-ranh" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/18/radisson_blu_cr-mb_ya0bfa_vertical.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-sapa/silk-path-grand-sapa-resort-spa" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/18/silk_path-mb_7kzvfj_vertical.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-tinh-phu-yen/zannier-hotels-bai-san-ho" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/18/11/zannier-mb_szcrnu_vertical.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-hoi-an/vinpearl-nam-hoi-an-resort-villa" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/18/11/vin_golf_nha-mb_lieima_vertical.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div>            </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding v-margin-top-30 hidden-xs">
                <div class="col-xs-12 no-padding heading">
                    <h2 class="heading__title">Combo tốt nhất hôm nay <span class="top-sale " ng-cloak ><img width="20" style="vertical-align: text-bottom;" src="https://res.ivivu.com/hotel/img/fire-sale.svg" />4 khách đã đặt phòng trong 24h qua</span></h2>
                    <p class="heading__description">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
                </div>
                <div class="col-xs-12 no-padding promotion-cards">
                    <div class=" item-placeholder-loading item-placeholder-loading__flash" style="border-radius:6px;">
                    </div>
                    <div class="col-xs-12 no-padding owl-carousel owl-carousel-promotion owl-theme">
                        <div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-nha-trang/khu-nghi-duong-cam-ranh-riviera-beach-resort-spa" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/18/13/cr_riviera-sd_ntr53d_horizontal.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-ha-noi/melia-ba-vi-mountain-retreat" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/18/melia_bavi-sd_f3jrxm_horizontal.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-nha-trang/khu-nghi-duong-radisson-blu-cam-ranh" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/18/radisson_blu_cr-sd_76r934_horizontal.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-nha-trang/vinpearl-luxury-nha-trang" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/18/11/vin_lux_nt-sd_wqgebc_horizontal.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div><div class="col-xs-12 promotion-card item">
                            <a href="https://www.ivivu.com/khach-san-vung-tau/khu-nghi-duong-holiday-inn-ho-tram" target="_blank">
                                <figure>
                                    <picture>



                                        <img src="https://cdn1.ivivu.com/images/2023/08/17/18/holidayinn_vt-sd_cdc0xl_horizontal.webp">
                                    </picture>
                                </figure>
                            </a>
                        </div>            </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
                <div class="col-xs-12 no-padding heading">

                    <h2 class="heading__title">Hè rồi, du lịch thôi!</h2>
                    <p class="heading__description">Thư giãn - nạp năng lượng - khám phá</p>

                </div>
                <div class="col-xs-12 no-padding v-margin-bottom-15">
                    <div class="item-placeholder-loading item-placeholder-loading__flash">
                    </div>
                    <div class="grid__container grid__container--topics super-cards topics owl-carousel  owl-carousel-mood owl-theme">




                        <div class="grid__item grid__item--1 item">
                            <div class="col-xs-12 super-card lazy " data-src="//cdn1.ivivu.com/iVivu/2023/05/23/19/chon-2.jpg" data-was-processed="true" style="background-image: url('//cdn1.ivivu.com/iVivu/2023/05/23/19/chon-2.jpg');">
                                <!--style="background-image: url('img');"-->
                                <a href="/chu-de/combo-quoc-te " target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Quốc tế</p>
                                            <p class="description">Kh&#225;m ph&#225; thế giới trong tầm tay - <span style="text-decoration:underline;">65 khách sạn</span></p>


                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--2 item">
                            <div class="col-xs-12 super-card lazy " data-src="//cdn1.ivivu.com/iVivu/2022/01/14/16/chon-4.jpg" data-was-processed="true" style="background-image: url('//cdn1.ivivu.com/iVivu/2022/01/14/16/chon-4.jpg');">
                                <!--style="background-image: url('img');"-->
                                <a href="/chu-de/khach-san-villa " target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Villa</p>
                                            <p class="description">Chill tại Villa, vui h&#232; thả ga - <span style="text-decoration:underline;">30 khách sạn</span></p>


                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--3 item">
                            <div class="col-xs-12 super-card lazy " data-src="//cdn1.ivivu.com/iVivu/2023/06/01/18/tb1.png" data-was-processed="true" style="background-image: url('//cdn1.ivivu.com/iVivu/2023/06/01/18/tb1.png');">
                                <!--style="background-image: url('img');"-->
                                <a href="/teamx " target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Team X</p>
                                            <p class="description">N&#226;ng tầm chuyến du lịch của c&#244;ng ty v&#224; đội nh&#243;m của bạn!</p>


                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--99 item">
                            <div class="col-xs-12 super-card lazy " data-src="https://cdn1.ivivu.com/images/general/dangcap1.webp" data-was-processed="true" style="background-image: url('https://cdn1.ivivu.com/images/general/dangcap1.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/voucher-du-lich" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Gift Voucher</p>


                                            <p class="description">Lưu giữ khoảnh khắc, trải nghiệm hành trình</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
                <div class="col-xs-12 no-padding heading">
                    <h2 class="heading__title">Điểm đến yêu thích trong nước</h2>
                    <p class="heading__description">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
                </div>
                <!--<div class="headLineDivider"></div>-->
                <div class="col-xs-12 no-padding">
                    <div class="grid__container grid__container--popular super-cards">

                        <div class="grid__item grid__item--1">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuquoc-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-phu-quoc" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Ph&#250; Quốc</p>

                                            <p class="description hidden-xs"> 398 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--2">
                            <div class="col-xs-12 super-card card-auto-height" style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/vungtau-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-vung-tau" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Vũng T&#224;u</p>

                                            <p class="description hidden-xs"> 192 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--3">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/dalat-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-da-lat" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Đ&#224; Lạt</p>

                                            <p class="description hidden-xs"> 509 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--4">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/quynhon-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-quy-nhon" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Quy Nhơn</p>

                                            <p class="description hidden-xs"> 118 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--5">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phanthiet-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-phan-thiet" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Phan Thiết</p>

                                            <p class="description hidden-xs"> 120 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--6">
                            <div class="col-xs-12 super-card card-auto-height" style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/nhatrang-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-nha-trang" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Nha Trang</p>

                                            <p class="description hidden-xs"> 428 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--7">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/danang-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-da-nang" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Đ&#224; Nẵng</p>

                                            <p class="description hidden-xs"> 647 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--8">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuyen-show.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-tinh-phu-yen" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Ph&#250; Y&#234;n</p>

                                            <p class="description hidden-xs"> 13 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
                <div class="col-xs-12 no-padding heading">
                    <h2 class="heading__title"> Điểm đến yêu thích nước ngoài</h2>
                    <p class="heading__description">Bao la thế giới. Bốn bể là nhà</p>
                </div>
                <!--<div class="headLineDivider"></div>-->
                <div class="col-xs-12 no-padding">
                    <div class="grid__container grid__container--popular-2 super-cards">

                        <div class="grid__item grid__item--1">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/04/17/11/kl-cr.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-kuala-lumpur" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Kuala Lumpur</p>

                                            <p class="description hidden-xs">1033 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--2">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/07/11/18/cruise-terminal-banner-cr.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-singapore-singapore" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Singapore</p>

                                            <p class="description hidden-xs">541 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--3">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/07/11/18/image-62d0243c31a586-52735367-cr.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-san-francisco" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">San Francisco</p>

                                            <p class="description hidden-xs">382 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--4">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/07/11/18/photo-1624138784614-87fd1b6528f8-cr.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-sydney-australia" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Sydney</p>

                                            <p class="description hidden-xs">290 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid__item grid__item--5">
                            <div class="col-xs-12 super-card " style="background-image: url('//cdn1.ivivu.com/iVivu/2023/02/13/17/maldives-cr.webp');">
                                <!--style="background-image: url('img');"-->
                                <a href="/khach-san-maldives-maldives" target="_blank">
                                    <div class="col-xs-12 card-bg">
                                        <div class="info">
                                            <p class="title">Maldives</p>

                                            <p class="description hidden-xs">614 khách sạn</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MOST INTERESTING HOTELS -->
            <!-- BEGIN PLACE POPULAR -->
            <!-- END PLACE POPULAR -->
            <!--BEGIN PREDICT GUEST-->

            <style>
                .title-predict {
                    font-size: 14px;
                    font-weight: bold;
                    padding: 4px 8px;
                    background-color: #DDDDDD;
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
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" style="padding-left:15px; text-transform: uppercase; ">
                                ĐẶT PHÒNG ĐOÀN
                                <i class="glyphicon glyphicon-info-sign fixGlyphicon vcolor-primary hidden-sm hidden-md hidden-lg" style="font-size:14px;"
                                   data-toggle="tooltip" data-placement="bottom" title="iVIVU.com sẽ tìm kiếm những deal tốt nhất (khách sạn giá tốt nhất và tour giá tốt nhất) và
                            gửi đến địa chỉ mail của khách hàng dựa vào thông tin mà khách hàng cung cấp."></i>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 findDealForCustomerHeading vspacingbottom15">
                                <p class="hidden-xs">
                                    Khi đặt phòng theo đoàn với iVIVU.com, bạn sẽ có được <b>khách sạn phù hợp nhất</b> với <b>giá tốt nhất</b> mà <b>không phải tốn thời gian tìm kiếm</b>.
                                </p>


                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                    <div class="form-group vspacingbottom25">
                                        <label class="control-label">
                                            <i class="glyphicon glyphicon-home hidden"></i> Yêu cầu
                                        </label>
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
                                                <div style="position:relative;">
                                                    <label for="findDealForCustomerPhone" class="control-label"><i class="glyphicon glyphicon glyphicon-earphone hidden"></i> Điện thoại </label>

                                                    <div class="div-phone">
                                                        <input type="tel" class="form-control" id="findDealForCustomerPhone" name="phone" placeholder="Số điện thoại" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="div-email" style="position:relative;">
                                                    <label for="findDealForCustomerEmail" class="control-label">
                                                        <i class="glyphicon glyphicon-send hidden"></i> Email
                                                    </label>
                                                    <i class="vcolor-danger" style="font-size:28px;position: absolute;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bắt buộc nhập">*</i>
                                                    <div>
                                                        <input type="text" class="form-control" id="findDealForCustomerEmail"
                                                               name="email" placeholder="Địa chỉ email" maxlength="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--if have any error, set class has-error, if not, dont -->
                                    <div class="alert alert-danger" role="alert" style="display:none">
                                        <div class="pre-place" style="display:none">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong> Vui lòng nhập địa điểm.
                                        </div>
                                        <div class="pre-email">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong> Chưa nhập địa chỉ email hoặc địa chỉ email chưa đúng
                                        </div>
                                        <div class="pre-phone" style="display:none">
                                            <strong>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                            </strong> Vui lòng nhập số điện thoại.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom10">
                                <div class="findDealForCustomerGuarantee hidden">
                                    • iVIVU.com cam kết đảm bảo an toàn thông tin của quý khách hàng. <br>
                                    • Quý khách hàng có thể yêu cầu ngưng dịch vụ tìm kiếm deal tốt nhất bất cứ lúc nào.
                                </div>

                                <button type="button" class="btn btn-warning btn-block btn-lg vbackground-warning" id="findDealForCustomerButton" onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'Đăng ký tìm kiếm deal', 'eventAction': 'Click', 'eventLabel': 'Đăng ký tìm kiếm deal' });">
                                    Đặt phòng đoàn
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--end modal from button lấy giá tốt-->
            <!--END PREDICT GUEST-->

        </div>
    </div>


</div>

@endsection
@section('scripts')
    <script>

        $(document).ready(function () {
            $('.search-button').on('click', function () {
                var selectedLocales = [];
                $('.search-form.home-page #searchSelect option:selected').each(function () {
                    selectedLocales.push($(this).val());
                });
                // Cập nhật URL với các lựa chọn được chọn
                var searchParams = new URLSearchParams();

                if (selectedLocales.length > 0) {
                    searchParams.set('locales', selectedLocales.join(','));
                }
                searchParams.set('q', $('.search-form.home-page #searchText').val());

                // Thay thế URL hiện tại với URL mới chứa các lựa chọn
                var newUrl =  '/item-list?' + searchParams.toString();
                window.location.replace(newUrl);

                // Tại đây, bạn có thể gửi yêu cầu AJAX hoặc xử lý dữ liệu không cần gửi yêu cầu
            });
        });
    </script>
@endsection