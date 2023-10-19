<!-- ngIf: IsLoadInit -->
@if (isset($items_prd) && count($items_prd) > 0)
    <div style="">
        <!-- ngRepeat: item in hotels track by $index -->
        @foreach ($items_prd as $item)
            <div class="hotel-item__wrapper ng-scope combo">
                <a target="_blank" class="hotel-item__a" href="/khach-san-da-lat/mercure-dalat-resort">
                    <div class="hotel-item">
                        <!--   ảnh-->
                        <div class="left">
                            <div class="img-wrapper">
                                <div class="image"  style="background-image: url('//cdn1.ivivu.com/iVivu/2022/06/30/12/hinhdaidien-374x280.webp?o=jpg');"></div>
                            </div>
                        </div>
                        <!--   thông tin-->
                        <div class="center">
                            <div class="header">
                                <p class="name limit-length ng-binding">
                                    {{$item->title}}
                                </p>
                                <p class="name">
                                    <!-- ngIf: item.Rating != -1 -->
                                    <span ng-if="item.Rating != -1" class="stars ng-scope">
                                                        <!-- ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                                        <span class="ng-scope">
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                        <!-- end ngRepeat: star in range(item.Rating/10) track by $index -->
                                        <!-- ngIf: item.Rating % 10 > 0 -->
                                                    </span>
                                    <!-- end ngIf: item.Rating != -1 -->
                                    <!-- ngIf: item.IsTop -->
                                    <i ng-if="item.IsTop" class="fa fa-heart heart ng-scope"></i>
                                    <!-- end ngIf: item.IsTop -->
                                    <!-- ngIf: item.Point != '0.0' -->
                                    <span ng-if="item.Point != '0.0'" onclick="location.href=''" class="review-small ng-scope">
                                                        <span class="review-score ng-binding">9.7</span>
                                                        <span class="review-text ng-binding">Tuyệt vời</span>
                                                        <span class="review-count ng-binding"> | 71 đánh giá</span>
                                                    </span>
                                    <!-- end ngIf: item.Point != '0.0' -->
                                </p>
                                <p class="address limit-length ng-binding"><i class="fa fa-map-marker"></i> 03 Nguyễn Du, Phường 9 - <b>Xem bản đồ</b></p>
                            </div>

                            <div class="highlights">
                                <!-- end ngIf: item.StyleTag.length>0 -->
                                <!-- ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                                <div class="hightlight ng-scope" ng-if="item.Facilities.length>0 &amp;&amp; item.Facilities[0].Name!=''">
                                    <div class="pill-container pill-primary">
                                        <div class="pill-title">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!-- ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                        <div class="pill-item ng-binding ng-scope" >
                                            Biệt thự nghỉ dưỡng
                                        </div>
                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                        <div class="pill-item ng-binding ng-scope" >
                                            Thiết kế ấn tượng
                                        </div>
                                        <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->

                                    </div>
                                </div>
                                <!-- end ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                            </div>
                        </div>
                        <!--  giá-->
                        <div class="right">
                            <div class="pricing">
                                <div class="pricing__group">
                                    <p class="price primary" >
                                                        <span class="price-num ng-binding">
                                                            2.461.000 VND
                                                        </span>
                                    </p>
                                    <!-- ngIf: LoadingFinish && UserTypes.isAgent && item.availableNo!=undefined -->
                                    <p class="price primary ng-hide">
                                                        <span class="price-num ng-binding">
                                                            2.461.000 VND
                                                        </span>
                                    </p>
                                    <!-- ngIf: LoadingFinish && (item.IsShowPrice==2 || item.IsShowPrice==0&&!IsShowPrice) &&!(UserTypes.isMember && UserTypes.memberInfo.showPrice==1) && item.priceOta !=undefined -->
                                    <p class="price primary ng-hide">
                                        <span class="price-num"><i class="vicon vicon-alarm-clock"></i> Hết phòng</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    @endforeach
    <!-- end ngRepeat: item in hotels track by $index -->

    </div>
@endif