<!-- Login Modal -->
<div id="LoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="close-modal-button" data-dismiss="modal">
            <span class="icon-ic_ivivu_user_close"></span>
        </div>

        <!-- Modal content-->
        <div class="modal-content row">
            <p class="first-text">Đăng nhập bằng:</p>
            <div class="col-xs-12 no-padding login-social">
                <div class="col-xs-6 btn-left-div">
                    <button class="btn btn-block btn-social btn-facebook" onclick="loginByFacebook()">
                        <i class="fa fa-facebook"></i> Facebook
                    </button>
                </div>

                <div class="col-xs-6 btn-right-div">
                    <button class="btn btn-block btn-social btn-google" id="loginGoogleButton">
                        <i class="fa fa-google"></i> Google
                    </button>
                </div>
            </div>

            <div class="col-xs-12 separate">
                <div class="col-xs-12 separate__inner">
                    <span class="separate__text">Hoặc</span>
                </div>
            </div>

            <form id="loginForm">
                <input type="text" name="IsRedirectMember" style="display: none;" value="false" />
                <div class="col-xs-12 no-padding login-form">
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Email / Số điện thoại</label>
                            <input type='text' class="form-control input-lg" placeholder="Email / Số điện thoại" name="EmailPhoneDN" required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-5">
                            <label class="control-label hidden-xs">Mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type='password' class="form-control input-lg" placeholder="Mật khẩu" maxlength="50" pattern=".{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mật khẩu tối thiểu 6 ký tự' : '');" name="PasswordDN" required />
                            <small class="text-danger errorMsg"></small>
                        </div>
                        <span class="pull-right v-margin-bottom-20"><a href="https://member.ivivu.com//forgot-pass" target="_blank" class="register-link">Quên mật khẩu? </a></span>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-login col-xs-12">Đăng nhập</button>
                        <!-- <p class="text-center">Chưa có tài khoản? <a href="#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>