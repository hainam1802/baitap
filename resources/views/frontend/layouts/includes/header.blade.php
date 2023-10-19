<header class="main-header ivivu-main-header">
    <input type="hidden" id="hdhdhdhhdhdhdhdhdhd" />
    <input type="hidden" id="token_change" />
    <input type="hidden" id="datepicker-temp-chkin" value="25-11-2023">
    <input type="hidden" id="datepicker-temp-chkout" value="27-11-2023">
    <nav class="navbar" style="border:0px solid transparent;">
        <div class="container">
            <div class="navbar-header">
                <a href="//www.ivivu.com" class="navbar-brand">
                    <img src="https://res.ivivu.com/hotel/img/logo-2023n.svg" alt="ivivu">

                </a>

                <button type="button" class="navbar-toggle collapsed hidden" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="//www.ivivu.com">Khách sạn <span class="sr-only">(current)</span></a></li>
                    <li><a href="//www.ivivu.com/du-lich">Tours</a></li>
                    <li><a href="//www.ivivu.com/ve-may-bay">Vé máy bay</a></li>
                    <li><a href="//www.ivivu.com/ve-vui-choi" >Vé vui chơi</a></li>
                    <li class="dropdown full-width">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu" role="menu" *dropdownMenu>
                            <li>
                                <a href="javascript:void(0)" onclick="Common.login()" data-keyboard="true" id="searchlogingg">Tài khoản đặt phòng</a>
                            </li>
                            <li><a href="//www.ivivu.com/blog" target="_blank">Cẩm nang du lịch</a></li>


                            <li><a href="//www.ivivu.com/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="//www.ivivu.com/hoi-dap">Hỏi đáp</a></li>
                            <li><a href="//www.ivivu.com/ho-tro">Hỗ trợ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="navbar-collapse pull-left visible-xs">
                <ul class="nav navbar-nav" id="dropdown-nav-mobile" role="menu">
                    <li class="active"><a href="//www.ivivu.com">Khách sạn <span class="sr-only">(current)</span></a></li>
                    <li><a href="//www.ivivu.com/du-lich">Tours</a></li>
                    <li><a href="//www.ivivu.com/ve-may-bay">Vé máy bay</a></li>

                    <li><a href="//www.ivivu.com/ve-vui-choi">Vé vui chơi</a></li>
                    <li><a href="//www.ivivu.com/blog" target="_blank">Cẩm nang du lịch</a></li>
                    <li>
                        <a href="javascript:void(0)" onclick="Common.login()" data-keyboard="true" id="searchlogingg">Tài khoản đặt phòng</a>
                    </li>


                    <li><a href="//www.ivivu.com/gioi-thieu">Giới thiệu</a></li>
                    <li><a href="//www.ivivu.com/hoi-dap">Hỏi đáp</a></li>
                    <li><a href="//www.ivivu.com/ho-tro">Hỗ trợ</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->


            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li data-placement="left" title="Tìm kiếm khách sạn">
                        <a class="search-item menu-search" id="homepage-search-icon">

                            <i class="fa fa-search btn-search fa fa-search btn-search menu-search "></i>
                        </a>
                    </li>


                    <li class="visible-xs">
                        <div class="hotline">
                            <div class="hotline-item"><a class="hotline-link" id="MobileHotlineNumber" href="tel:19001870"><i class="fa fa-phone"></i> 1900 1870</a></div>
                            <div class="hotline-item">
                                <div class="dropdown hotline-dropdown">
                                    <p class="hotline-location pull-right dropdown-toggle" data-toggle="dropdown">
                                        <span class="v-margin-right-5" id="MobileTime"><i class="fa fa-clock-o"></i> 7h30 → 21h</span>
                                        <i class="fa fa-map-marker"></i> <span id="mobileDisplayName">iVIVU HCM</span> <i class="fa fa-angle-down"></i>
                                    </p>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick="HeaderHotline('SG')">
                                            <div class="hotline-dd-item">
                                                <span class="pull-left v-padding-right-5"> Hồ Chí Minh </span>
                                                <span class="pull-right vcolor-warning">1900 1870</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li onclick="HeaderHotline('HN')">
                                            <div class="hotline-dd-item">
                                                <span class="pull-left v-padding-right-5"> Hà Nội </span>
                                                <span class="pull-right vcolor-warning">1900 2045</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li onclick="HeaderHotline('CT')">
                                            <div class="hotline-dd-item">
                                                <span class="pull-left v-padding-right-5"> Cần Thơ </span>
                                                <span class="pull-right vcolor-warning">1900 2087</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- START Member Menu -->

                    <li class="dropdown user-login" id="UserLogin">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="img-wrapper-mb visible-xs">
                                <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                            </div>
                            <div class="hidden-xs hidden-sm">
                                <div class="img-wrapper">
                                    <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                                </div>
                                <span class="username-header">Tài khoản</span> <i class="fa fa-angle-down"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu member-dropdown-menu user-menu-list" role="menu">
                            <li class="btn-login-wrap">
                                <btn type="button" class="btn btn-action btn-login-header" onclick="showLoginDialog()">Đăng nhập</btn>
                            </li>
                            <li class="register-text">Chưa có tài khoản? <span class="register-link" onclick="showRegisterDialog()">Đăng ký</span> ngay</li>
                        </ul>
                    </li>
                    <!-- END Member Menu -->
                    <!-- START Payment Login -->
                    <li class="dropdown user-login hidden" id="UserMenu">
                        <!--add class logged-in-->
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                            <div class="img-wrapper-mb visible-xs" >
                                <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                            </div>
                            <div class="hidden-xs hidden-sm">
                                <div class="img-wrapper"><img class="img-circle" id="avatarDesk" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg"></div>
                                <span class="hidden-md user-name" id="UserName"> <i class="fa fa-angle-down"></i></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu member-dropdown-menu" role="menu">

                            <!--visible in mobile view-->
                            <li class="visible-xs">
                                <div class="member-header">
                                    <div class="member-header__avatar img-wrapper-mobile">
                                        <img class="img-circle" id="avatarMobi" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                                    </div>
                                    <div class="member-header__info">
                                        <p class="no-margin name max user-name" id="Name"></p>

                                    </div>
                                </div>
                            </li>

                            <li class="divider visible-xs afterLogin" style="margin-top:0px;"></li>

                        </ul>
                    </li>
                    <!-- END Payment Login -->
                    <li class="hidden-xs hidden-sm">
                        <div class="hotline">
                            <div class="hotline-item">
                                <a class="hotline-link" id="DeskHotlineNumber" href="tel:19001870"><i class="fa fa-phone"></i> 1900 1870</a>
                            </div>
                            <div class="hotline-item">
                                <div class="dropdown hotline-dropdown">
                                    <p class="hotline-location pull-right dropdown-toggle" data-toggle="dropdown">
                                        <span class="v-margin-right-5" id="DeskTime"><i class="fa fa-clock-o"></i> 7h30 → 21h</span>
                                        <i class="fa fa-map-marker"></i> <span class="visible-lg-inline-block" id="DeskDisplayName">Hồ Chí Minh </span> <span class="hidden-lg">iVIVU HCM</span> <i class="fa fa-angle-down"></i>
                                    </p>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick="HeaderHotline('SG')">
                                            <div class="hotline-dd-item active">
                                                <span class="pull-left v-padding-right-5"> Hồ Chí Minh </span>
                                                <span class="pull-right vcolor-warning">1900 1870</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li onclick="HeaderHotline('HN')">
                                            <div class="hotline-dd-item">
                                                <span class="pull-left v-padding-right-5"> Hà Nội </span>
                                                <span class="pull-right vcolor-warning">1900 2045</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li onclick="HeaderHotline('CT')">
                                            <div class="hotline-dd-item">
                                                <span class="pull-left v-padding-right-5"> Cần Thơ </span>
                                                <span class="pull-right vcolor-warning">1900 2087</span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>


            <!-- BEGIN TOPSEARCH -->


            <!-- END TOPSEARCH -->


            <div   class="col-xs-12 header-search-form__outer"   style="display:none;">
                <div class="container">
                    <div class="searchbox-wrap clearfix">
                        <form id="header-search-form" action="//www.ivivu.com/tim-kiem" method="GET">
                            <div class="col-xs-12 header-search-form">
                                <div class="col-xs-12 col-sm-5 col-md-5 hotel-div">
                                    <div class="form-group ">
                                        <label class="control-label ">Tìm nhanh khách sạn</label>
                                        <input type="text" class="form-control typeahead " maxlength="255" id="search-header-text" name="q" autocomplete="off"
                                               placeholder="Nhập tên thành phố, khu vực, khách sạn">

                                        <input type="hidden" id="linkStore ">
                                        <div id="header-search-autocomplete" class="search-autocomplete">
                                            <div class="autocomplete-wrap"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 no-padding search-quantity">
                                    <div class="col-xs-5 date-div check-in ">
                                        <div class="form-group has-feedback date-menu-checkin">
                                            <label class="control-label">Nhận phòng</label>
                                            <input readonly type="text" class="form-control input-white" maxlength="12" id="datepicker-menu-chkin" name="di" class="datepicker-chkin" value="25-11-2023">
                                            <span class="fa fa-calendar-o form-control-feedback"></span>
                                        </div>
                                    </div>

                                    <div class="col-xs-2 select-div" style="padding-left:0; padding-right:0;">

                                        <div class="form-group ">
                                            <label class="control-label">Số đêm</label>
                                            <div>
                                                <select id="datepicker-menu-nights" name="dn" class="form-control" style="border-right-width: 1.5px">
                                                    <option value="1" >1</option>
                                                    <option value="2"   selected  >2</option>
                                                    <option value="3" >3</option>
                                                    <option value="4" >4</option>
                                                    <option value="5" >5</option>
                                                    <option value="6" >6</option>
                                                    <option value="7" >7</option>
                                                    <option value="8" >8</option>
                                                    <option value="9" >9</option>
                                                    <option value="10" >10</option>
                                                    <option value="11" >11</option>
                                                    <option value="12" >12</option>
                                                    <option value="13" >13</option>
                                                    <option value="14" >14</option>
                                                    <option value="15" >15</option>
                                                    <option value="16" >16</option>
                                                    <option value="17" >17</option>
                                                    <option value="18" >18</option>
                                                    <option value="19" >19</option>
                                                    <option value="20" >20</option>
                                                    <option value="21" >21</option>
                                                    <option value="22" >22</option>
                                                    <option value="23" >23</option>
                                                    <option value="24" >24</option>
                                                    <option value="25" >25</option>
                                                    <option value="26" >26</option>
                                                    <option value="27" >27</option>
                                                    <option value="28" >28</option>
                                                    <option value="29" >29</option>
                                                    <option value="30" >30</option>

                                                    <option value="0">30+</option>
                                                </select>
                                                <span class="fa fa-angle-down  select-icon"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xs-5 date-div check-out ">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Trả phòng </label>
                                            <input readonly type="text" class="form-control input-white" maxlength="12" id="datepicker-menu-chkout" name="do" class="datepicker-chkout" value="27-11-2023">
                                            <span class="fa fa-calendar-o form-control-feedback"></span>
                                        </div>
                                    </div>




                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 action-div">
                                    <div class="form-group has-feedback">
                                        <label class="control-label hidden-xs">&nbsp;</label>
                                        <button class="btn btn-action btn-block " id="header-search-button">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>