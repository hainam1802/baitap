
<!-- Register Modal -->
<div id="RegisterModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="close-modal-button" data-dismiss="modal">
            <span class="icon-ic_ivivu_user_close"></span>
        </div>

        <!-- Modal content-->
        <div class="modal-content row">
            <p class="first-text">Đăng ký bằng:</p>
            <div class="col-xs-12 no-padding login-social">
                <div class="col-xs-6 btn-left-div">
                    <button class="btn btn-block btn-social btn-facebook" onclick="loginByFacebook()">
                        <i class="fa fa-facebook"></i> Facebook
                    </button>
                </div>

                <div class="col-xs-6 btn-right-div">
                    <button class="btn btn-block btn-social btn-google" id="registerGoogleButton">
                        <i class="fa fa-google"></i> Google
                    </button>
                </div>
            </div>

            <div class="col-xs-12 separate">
                <div class="col-xs-12 separate__inner">
                    <span class="separate__text">Hoặc</span>
                </div>
            </div>

            <form id="registerForm">
                <div class="col-xs-12 no-padding login-form">
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Email</label>
                            <input type='email' class="form-control input-lg" placeholder="Email" name="EmailDK" maxlength="50" validateEmail required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type="password" class="form-control input-lg" maxlength="50" placeholder="Mật khẩu" pattern=".{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mật khẩu tối thiểu 6 ký tự' : ''); if(this.checkValidity()) form.RePasswordDK.pattern = this.value;" name="PasswordDK" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-5">
                            <label class="control-label hidden-xs">Xác nhận mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type="password" class="form-control input-lg" maxlength="50" placeholder="Xác nhận mật khẩu" pattern=".{6,}" title="Mật khẩu tối thiểu 6 ký tự !" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Xác nhận mật khẩu phải giống Mật khẩu' : '');" name="RePasswordDK" required>
                            <small class="text-danger errorMsg"></small>
                        </div>
                    </div>
                    <div class="col-xs-12 v-margin-bottom-20">
                        <div class="form-group md-checkbox v-margin-bottom-15">
                            <input type="checkbox" id="policy-checkbox" name="policy-checkbox">
                            <label for="policy-checkbox">Bằng việc tham gia iVIVU, tôi đồng ý tất cả <a href="https://www.ivivu.com/dieu-kien-dieu-khoan" target="_blank">điều kiện & điều khoản</a>.</label>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-login col-xs-12">Đăng ký</button>
                        <!-- <p class="text-center">Chưa có tài khoản? <a href="#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>