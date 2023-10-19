@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/css/payment.css">

@endsection
@section('content')
    <main >
        <!-- HEY GUY! I'M HERE -->
        <div class="container page-notification  ">
            <div class="margin-top-15">
                <div class="col-xs-12 col-sm-12 col-md-12 thank-you-wrap">
                    <div class="col-xs-12 col-md-3 img-error hidden-xs">
                        <img src="//res.ivivu.com/payment//img/img-booking-cancel.png">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <p>
                            Cảm ơn Quý khách đã sử dụng dịch vụ
                        </p>
                        <p>
                            Mã đặt phòng của Quý Khách là <b class="order-no-green">{{$order->id}}</b>
                        </p>
                        <p>
                            Mời Quý khách thanh toán số tiền <span class="order-no-green">{{number_format($order->price) }} <span class="prefix-price">VND</span> </span> để hoàn tất việc đặt phòng
                        </p>
                        <p>Nếu cần sự hỗ trợ vui lòng liên hệ qua email hoặc số tổng đài </p><br>
                        <div class="col-xs-6 re-action">
                            <button type="submit" class="btn margin-bottom-20 btn btn-flat btn-lg btn-action back-to-home" style="padding: 9px 0px; width: 100%;" onclick="location.href='https://ivivu.com'">Về lại trang chủ</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
@endsection
