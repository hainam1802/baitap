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
                                                    <h2>{{isset($data->title) ? $data->title : null}} <i class="sprites v-icn-star-40 hotelItemRatingIcon"></i></h2>
                                                </div>
                                                <div class="address-hotel">
                                                    <i class="glyphicon glyphicon-map-marker"></i>
                                                    <span> {{isset($data->locale) ? $data->locale->title : null}} </span>
                                                </div>


                                                <div class="content-hotel">
                                                    <i class="vvcon-places_meeting_room"></i>
                                                    <span>
                                                   {{isset($data->category) ? $data->category->title : null}}
                                                </span>
                                                </div>

                                                <div class="content-hotel">
                                                    <i style="font-weight: bold;" class="vvcon-ic_ivivu_user_people"></i>
                                                    <span> {{isset($data->group) ? $data->group->title : null}} </span>
                                                </div>
                                                <p class="opacity07"><i class="vicon vicon-notice-info"></i> Không hoàn huỷ hoặc thay đổi</p>
                                            </div>
                                            <div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                    <div class="horizontalLine"></div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing promo-container">
                                                    <div class="title-hotel vspacingbottom10 vspacingtop10">

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
                                                            <span class="totalPrice" id="totalhotel">{{number_format($data->price)}}  VND</span>
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
                                                            <span class="totalPrice ng-pristine ng-untouched ng-valid" id="totalhotelall" data-price="{{number_format($data->price)}}  VND" >{{number_format($data->price)}}  VND</span>
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
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing paymentPanel">
                                            <form action="/post-order" method="post">
                                                {{ csrf_field() }}

                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
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
                                                                    <input value="0" type="radio"  name="gender" @if(auth()->guard('frontend')->user()->gender == 0) checked @endif />
                                                                </div>
                                                                <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                    <span>Anh</span>
                                                                </div>

                                                                <div class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                    <input value="1" type="radio"  name="gender" @if(auth()->guard('frontend')->user()->gender == 1) checked @endif />
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
                                                                <input type="text" value="{{auth()->guard('frontend')->user()->fullname}}" class="form-control input-sm auto-name-fill" name="fullname" id="fullname" />
                                                                <div id="customernameautocomplete-list" class="customername autocomplete-items"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom10">
                                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Điện thoại:</span>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">
                                                                <input type="number" name="phone" class="form-control input-sm" value="{{auth()->guard('frontend')->user()->phone}}" id="phone" />
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom10">
                                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Email:</span>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                                <input type="email" class="form-control input-sm" name="email" {{auth()->guard('frontend')->user()->email}} id="email" />
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

                                                                </div>
                                                                <div class="row vspacingbottom15">
                                                                    <div class="col-xs-12 vremoveSpacing">
                                                                        <textarea class="form-control input-sm" name="note" id="note"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small class="text-danger ">
                                                            <strong>{{ $errors->first() }}</strong>

                                                        </small>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <!--<div class="row continue-step">-->
                                                            <div class="clearfix">
                                                                <div class="payment-continue vremoveSpacing vspacingtop10 vspacingbottom10 width100">
                                                                    <button type="submit" class="btn btn-warning next-button">Thanh toán ngay</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
