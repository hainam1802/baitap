<header class="main-header ivivu-main-header">
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
                    <li class="active"><a href="/">Trang chủ</a></li>
                    <li><a href="//www.ivivu.com/du-lich">Tours</a></li>
                    <li><a href="//www.ivivu.com/ve-may-bay">Vé máy bay</a></li>
                    <li><a href="//www.ivivu.com/ve-vui-choi" >Vé vui chơi</a></li>

                </ul>
            </div>

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
                    @if(!auth()->guard('frontend')->check())
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

                    @else
                        <li class="dropdown user-login " id="UserLogin">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="img-wrapper-mb visible-xs">
                                    <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" src="https://gate.ivivu.com/upload/avatar/avatar-default-white.png">

                                </div>
                                <div class="hidden-xs hidden-sm">
                                    <div class="img-wrapper">
                                        <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                                    </div>
                                    <span class="username-header">{{auth()->guard('frontend')->user()->username}}</span> <i class="fa fa-angle-down"></i>
                                </div>

                            </a>
                            <ul class="dropdown-menu member-dropdown-menu user-menu-list" role="menu">
                                <li class="visible-xs">
                                    <div class="member-header">
                                        <div class="member-header__avatar img-wrapper-mobile">
                                            <img class="img-circle" src="https://gate.ivivu.com/upload/avatar/avatar-default-white.png">
                                        </div>
                                        <div class="member-header__info">
                                            <p class="no-margin name max username-header">{{auth()->guard('frontend')->user()->username}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider visible-xs" style="margin-top:0px;"></li>
                                <li><a href="https://member.ivivu.com/dashboard/trips">Kỳ nghỉ của tôi</a></li>
                                <li><a href="https://member.ivivu.com/dashboard/voucher">Voucher của tôi</a></li>


                                <li><a href="https://member.ivivu.com/dashboard/profile">Hồ sơ của tôi</a></li>
                                <li><a href="https://member.ivivu.com/dashboard/my-review">Nhận xét của tôi</a></li>
                                <div class="col-xs-12 logout-btn-wrap">
                                    <a class="col-xs-12 logout-btn" href="/logout">Đăng xuất</a>
                                </div>
                            </ul>
                        </li>
                    @endif
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
                        </div>
                    </li>
                </ul>

            </div>


        </div>
    </nav>
</header>