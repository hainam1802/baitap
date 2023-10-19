
<!-- Register Modal -->
<div id="RegisterModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="close-modal-button" data-dismiss="modal">
            <span class="icon-ic_ivivu_user_close"></span>
        </div>

        <!-- Modal content-->
        <div class="modal-content row">

            <form method="post" action="/register">
                {{ csrf_field() }}
                <div class="col-xs-12 no-padding login-form">
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Tên tài khoản</label>
                            <input type='text' class="form-control input-lg" placeholder="Tên tài khoản" name="username" maxlength="50"  required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type="password" class="form-control input-lg" maxlength="50" placeholder="Mật khẩu"  name="password" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-5">
                            <label class="control-label hidden-xs">Xác nhận mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type="password" class="form-control input-lg" maxlength="50" placeholder="Xác nhận mật khẩu" name="password_confirmation" required>
                            <small class="text-danger errorMsg"></small>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Email: </label>
                            <div class="clearfix"></div>
                            <input type="email" class="form-control input-lg" maxlength="50" placeholder="Email"  name="email" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Số điện thoại: </label>
                            <div class="clearfix"></div>
                            <input type="number" class="form-control input-lg" maxlength="50" placeholder="Số điện thoại *"  name="phone" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label>Giới tính:</label>
                            <div class="controls">
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
                    </div>



                    <div class="col-xs-12">
                        <button type="submit" class="btn col-xs-12">Đăng ký</button>
                        <!-- <p class="text-center">Chưa có tài khoản? <a href="#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>