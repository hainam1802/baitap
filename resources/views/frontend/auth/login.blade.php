<!-- Login Modal -->
<div id="LoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">



        <!-- Modal content-->
        <div class="modal-content row">
            <form action="/login" method="POST" >
                {{ csrf_field() }}

                <div class="col-xs-12 no-padding login-form" >
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-20">
                            <label class="control-label hidden-xs">Tên tài khoản</label>
                            <input type='text' class="form-control input-lg" placeholder="Tên tài khoản" name="username" required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group v-margin-bottom-5">
                            <label class="control-label hidden-xs">Mật khẩu </label>
                            <div class="clearfix"></div>
                            <input type='password' class="form-control input-lg" placeholder="Mật khẩu" maxlength="50" name="password" required />
                            <small class="text-danger ">
                                <strong>{{ $errors->first() }}</strong>

                            </small>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" name="usernametemp" class="btn btn-login col-xs-12">Đăng nhập</button>
                         <p class="text-center">Chưa có tài khoản? <a href="/register" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>