<!-- ngIf: IsLoadInit -->
@if (isset($items_prd) && count($items_prd) > 0)
    <!-- ngRepeat: item in hotels track by $index -->
    @foreach ($items_prd as $item)
        <div class="hotel-item__wrapper ng-scope combo">
            <a class="hotel-item__a " style="width: 100%" href="{{isset($item->slug) ? $item->slug : $item->url}}">
                <div class="hotel-item">
                    <!--   ảnh-->
                    <div class="left">
                        <div class="img-wrapper">
                            <div class="image"
                                 style="background-image: url('{{ isset($item->image)?\App\Library\Files::media($item->image) : null }}');">

                            </div>
                        </div>
                    </div>
                    <!--   thông tin-->
                    <div class="center">
                        <div class="header">
                            <p class="name limit-length ng-binding">
                                {{isset($item->title) ? $item->title : null}}
                            </p>
                            <p class="name">
                                <!-- ngIf: item.Rating != -1 -->
                                <span class="stars ng-scope">
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

                            </p>
                            <p class="address limit-length ng-binding">
                                <i class="fa fa-map-marker"></i> {{isset($item->locale) ? $item->locale->title : null}}
                            </p>
                        </div>

                        <div class="highlights">
                            <!-- end ngIf: item.StyleTag.length>0 -->
                            <!-- ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                            <div class="hightlight ng-scope" >
                                <div class="pill-container pill-primary">
                                    <div class="pill-title">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                    <div class="pill-item ng-binding ng-scope" >
                                        {{isset($item->category) ? $item->category->title : null}}
                                    </div>
                                    <div class="pill-item ng-binding ng-scope" >
                                        -
                                    </div>
                                    <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->
                                    <div class="pill-item ng-binding ng-scope" >
                                        {{isset($item->group) ? $item->group->title : null}}
                                    </div>
                                    <!-- end ngRepeat: itemFac in item.Facilities | limitTo:2 track by $index -->

                                </div>
                            </div>
                            <!-- end ngIf: item.Facilities.length>0 && item.Facilities[0].Name!='' -->
                        </div>
                    </div>
                    <!--  giá-->
                    <div class="right" >
                        <div class="pricing">
                            <div class="pricing__group">
                                <p class="price primary" >
                                    <strong>{{number_format($item->price)}} ₫</strong>
                                </p>
                                <button class="btn btn-action btn-block btn-success btn-big " style="margin-top: 8px">
                                    <b> Chi tiết</b>
                                </button>

                                <button class="btn btn-action btn-block btn-success btn-big " style="margin-top: 8px">
                                    <b> Chi tiết</b>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    <!-- end ngRepeat: item in hotels track by $index -->

@endif
