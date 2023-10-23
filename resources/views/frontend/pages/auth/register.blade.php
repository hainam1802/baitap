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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fullscreen-mb" id="bookingPayment">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing paymentPanel">
                            <form action="/register" method="POST">
                                {{ csrf_field() }}
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="padding: 40px">


                                    <div class="title-hotel vspacingbottom10">
                                        <h2>
                                            Đăng ký
                                        </h2>
                                    </div>
                                    <small class="text-danger ">
                                        <strong>{{ $errors->first() }}</strong>

                                    </small>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                        <div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                <span>Tên tài khoản</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px">
                                                <input type="text" value="" class="form-control input-sm auto-name-fill" name="username" required />
                                            </div>
                                        </div>
                                        <br>
                                        <div >
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel" style="margin-top: 8px;">
                                                <span>Mật khẩu</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px; margin-bottom: 12px">
                                                <input type="password" value="" class="form-control input-sm auto-name-fill" name="password" required  />
                                            </div>
                                        </div>
                                        <div >
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel" style="margin-top: 8px;">
                                                <span>Xác nhận mật khẩu</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px; margin-bottom: 12px">
                                                <input type="password" value="" class="form-control input-sm auto-name-fill" name="password_confirmation" required  />
                                            </div>
                                        </div>
                                        <div >
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel" style="margin-top: 8px;">
                                                <span>Email</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px; margin-bottom: 12px">
                                                <input type="text" value="" class="form-control input-sm auto-name-fill" name="email" required  />
                                            </div>
                                        </div>
                                        <div >
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel" style="margin-top: 8px;">
                                                <span>Số điện thoại</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px; margin-bottom: 12px">
                                                <input type="text" value="" class="form-control input-sm auto-name-fill" name="phone" required  />
                                            </div>
                                        </div>
                                        <div >
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel" style="margin-top: 8px;">
                                                <span>Giới tính</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 vremoveSpacing" style="margin-top: 8px; margin-bottom: 12px">
                                                <label class="radio-ctn">
                                                    <input type="radio" name="gender" value="1" >
                                                    <span class="checkmark"></span>
                                                    <span><strong>Nam</strong></span>
                                                </label>

                                                <label class="radio-ctn">
                                                    <input type="radio" name="gender" value="0" >
                                                    <span class="checkmark"></span>
                                                    <span><strong>Nữ</strong></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>

                                            <button type="submit" class="btn btn-warning next-button">Đăng ký</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
@endsection
