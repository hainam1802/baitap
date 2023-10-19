@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/css/payment.css">

@endsection
@section('content')
<main >
    <!-- HEY GUY! I'M HERE -->
    <div class="container">
        <div class="nopadding col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 v-margin-top-15" id="bookingPayment">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="bookingInfo">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right fullscreen-mb">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel">
                                        <br />
                                        <div id="hotelDetail" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                            <div class="title-hotel vspacingbottom10">
                                                <h2>Khu nghỉ dưỡng Mercure Đà Lạt <i class="sprites v-icn-star-40 hotelItemRatingIcon"></i></h2>
                                            </div>
                                            <div class="address-hotel">
                                                <i class="glyphicon glyphicon-map-marker"></i>
                                                <span> 03 Nguyễn Du, Phường 9, Đà Lạt </span>
                                            </div>
                                            <div class="content-hotel">
                                                <i class="vvcon-calendar_today"></i>
                                                <span>
                                                    T4, 25/10/2023 → T5, 26/10/2023 · 1 đêm
                                                </span>
                                            </div>

                                            <div class="content-hotel">
                                                <i class="vvcon-places_meeting_room"></i>
                                                <span>
                                                    1 Phòng Deluxe King Room · Gồm ăn sáng
                                                </span>
                                            </div>

                                            <div class="content-hotel">
                                                <i style="font-weight: bold;" class="vvcon-ic_ivivu_user_people"></i>
                                                <span> 2 người lớn · 0 trẻ em </span>
                                            </div>
                                            <p class="opacity07"><i class="vicon vicon-notice-info"></i> Không hoàn huỷ hoặc thay đổi</p>
                                        </div>
                                        <div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                <div class="horizontalLine"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing promo-container">
                                                <div class="title-hotel vspacingbottom10 vspacingtop10">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paddingDivBottom display-none" id="remove_coupon">
                                                                <div class="title-hotel">
                                                                    <h2>
                                                                        Giảm Giá (
                                                                        <span class="remowcoupon" onclick="_Payment.HuyKhuyenMai();">Hủy</span>)
                                                                    </h2>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                                                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopadding">Số Tiền</div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-8 col-lg-9 nopadding">
                                                                        <span class="hightLight" id="value_coupon"></span>
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="pull-left" id="head_promo_code">
                                                        Bạn có mã khuyến mãi?
                                                    </h2>
                                                    <div class="clearfix"></div>

                                                    <label class="lbl-blue" id="btnVoucher" data-toggle="modal" data-target="#exampleModal">Chọn hoặc nhập mã khuyến mãi</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                            <div class="horizontalLine"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing vspacingbottom15">
                                            <div class="title-hotel vspacingbottom10">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                    <div class="row"></div>
                                                </div>
                                                <h2 class="pull-left">Tổng cộng thanh toán</h2>

                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                        <span>Khách sạn</span>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                        <span class="totalPrice" id="totalhotel">2.675.000 VND</span>
                                                    </div>
                                                </div>

                                                <div style="display: none;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5" id="pannertoure">
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                        <span>Tours</span>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing">
                                                        <span class="totalPrice" id="totaltour">0 VND</span>
                                                    </div>
                                                </div>

                                                <div style="display: none;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5" id="promo-price">
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                        <span>Sử dụng mã giảm giá</span>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                        <span class="totalPrice" id="totalpromo"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="horizontalLine"></div>
                                                </div>

                                                <div id="useUserPoint" style="display: none;">
                                                    <div class="col-xs-12">
                                                        <label class="ivivuPoint-checkbox">
                                                            <span class="point-text"></span>
                                                            <input type="checkbox" id="usePoint-checkbox" onclick="checkUserPoint(this)" unchecked="" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div id="discount_voucher" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                    <!-- ngIf: codeVoucher && codeVoucher != '' -->
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                        <span class="totalPrice ng-binding" id="discountStr"></span>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                        <span>Tổng tiền</span>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                        <span class="totalPrice ng-pristine ng-untouched ng-valid" id="totalhotelall" data-price="2.675.000 VND" ng-model="totalAmount">2.675.000 VND</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <span class="taxIncluded">Giá đã bao gồm thuế &amp; phí.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="tourselectcttc" />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 fullscreen-mb" id="bookerInfo">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                        <div id="bookerInfoProfile" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel">
                                            <br />

                                            <div class="title-hotel vspacingbottom10">
                                                <h2>
                                                    Thông tin người đặt
                                                    <br />
                                                    <span>Vui lòng điền đầy đủ thông tin</span>
                                                </h2>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="user-booking-info">
                                                <div class="row vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                        <span>Danh xưng:</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                        <div class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                            <input value="0" type="radio"  name="ctitle" />
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                            <span>Anh</span>
                                                        </div>

                                                        <div class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                            <input value="1" type="radio"  name="ctitle" />
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                            <span>Chị</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                        <span>Họ và tên đầy đủ:</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                        <input type="text" class="form-control input-sm auto-name-fill" id="customername" />
                                                        <div id="customernameautocomplete-list" class="customername autocomplete-items"></div>
                                                    </div>
                                                </div>
                                                <div class="row vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                        <span>Điện thoại:</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                        <input type="number" class="form-control input-sm" id="phone" />
                                                    </div>
                                                </div>
                                                <div class="row vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                        <span>Email:</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                        <input type="email" class="form-control input-sm" id="email" />
                                                    </div>
                                                </div>

                                                <div class="row vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel hidden-xs">
                                                        <span></span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                        <input id="registercustomerorther" type="checkbox" class="customizedCheckbox display-none" />

                                                        <label for="registercustomerorther" class="labelRegisterAnotherCustomer display-none">Tôi đặt phòng cho người khác</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="display-none" id="registercustomerortherform">
                                                <div class="title-hotel vspacingbottom10">
                                                    <h2>Thông tin khách nhận phòng</h2>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Danh xưng:</span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                            <div class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                <input checked="checked" type="radio" value="0" name="ltitle" />
                                                            </div>
                                                            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                <span>Anh</span>
                                                            </div>
                                                            <div class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                <input type="radio" value="1" name="ltitle" />
                                                            </div>
                                                            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                <span>Chị</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Họ và tên đầy đủ:</span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="leadingname" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Điện thoại:</span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="lphone" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Email:</span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                            <input type="email" class="form-control input-sm" id="lemail" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div id="registercustomerortherformhodonhhhh">
                                                <div class="title-hotel vspacingbottom10">
                                                    <h2>Thông tin yêu cầu khác</h2>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="row vspacingbottom15 hidden">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing">
                                                            <div class="vspacingright15">
                                                                <span>Thời gian nhận phòng dự kiến:</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="hoursddd" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom15">
                                                        <div class="col-xs-12 vremoveSpacing">
                                                            <textarea class="form-control input-sm" id="recdudud"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vremoveSpacing">
                                                <input type="checkbox" id="registercustomerortherorder" class="customizedCheckbox" />
                                                <label for="registercustomerortherorder" class="labelRegisterAnotherCustomer v-margin-left-5">Xuất hóa đơn điện tử</label>
                                            </div>
                                            <div id="registercustomerortherformhodon" class="display-none">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <br />
                                                </div>
                                                <div class="title-hotel vspacingbottom10">
                                                    <h2>Thông tin xuất hóa đơn</h2>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Tên công ty:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="companyname" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Địa chỉ:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="companyaddress" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Mã số thuế:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                            <input type="text" size="13" maxlength="13" class="form-control input-sm" id="companytax" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10 hidden">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing">
                                                            <span>Địa chỉ nhận hóa đơn:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                            <input type="text" class="form-control input-sm" id="coompanyaddresshaodon" />
                                                        </div>
                                                    </div>
                                                    <div class="vremoveSpacing vspacingbottom10">
                                                        <input type="checkbox" checked="checked" id="isusedinfo" class="customizedCheckbox" />
                                                        <label for="isusedinfo" class="labelRegisterAnotherCustomer v-margin-left-5">Dùng họ tên &amp; email của người đặt dịch vụ để xuất hoá đơn</label>
                                                    </div>
                                                    <div class="row vspacingbottom10 used-info hidden">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Họ tên:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="companycontactname" />
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10 used-info hidden">
                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Email nhận HĐ:</span>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                            <input type="text" class="form-control input-sm" id="companycontactemail" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 vremoveSpacing vspacingbottom15">
                                                <div class="title-hotel vspacingbottom10">
                                                    <h2>Chọn nhân viên tư vấn từ</h2>
                                                </div>

                                                <div class="col-xs-12 no-padding v-btn-group-radio">
                                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                        <label class="btn btn-default btn-change-location location-hcm">
                                                            <input type="radio" name="options" autocomplete="off" checked="" />
                                                            <span class="hidden-xs">Hồ Chí Minh</span>
                                                            <span class="visible-xs-inline">Tp.HCM</span>
                                                        </label>
                                                        <label class="btn btn-default btn-change-location location-hn">
                                                            <input type="radio" name="options" autocomplete="off" />
                                                            <span>Hà Nội </span>
                                                        </label>
                                                        <label class="btn btn-default btn-change-location location-ct">
                                                            <input type="radio" name="options" autocomplete="off" />
                                                            <span>Cần Thơ </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <!--<div class="row continue-step">-->
                                                    <div class="clearfix">
                                                        <div class="payment-continue vremoveSpacing vspacingtop10 vspacingbottom10 width100" ng-class="{'width100':banks.length == 0}">
                                                            <button id="btn_complete" class="btn btn-warning next-button">Thanh toán ngay</button>
                                                            <button id="btn_complete" class="btn btn-warning next-button" style="display: none;">Hoàn tất đặt phòng</button>
                                                        </div>
                                                        <div class="payment-tragop vremoveSpacing vspacingtop10 vspacingbottom10">
                                                            <button id="btn_tragop" ng-click="tragopContinue()" ng-show="banks.length > 0" class="btn btn-warning next-button btn-block ng-hide">
                                                                Trả góp
                                                                <!-- ngIf: tragopMinPrice -->
                                                                <span ng-if="tragopMinPrice" class="small-text ng-binding ng-scope">Chỉ từ 235.000đ/tháng</span>
                                                                <!-- end ngIf: tragopMinPrice -->
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="divSpacing"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
