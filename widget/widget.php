<?php
use App\Models\Group;
use App\Models\Group_Item_Index;
use App\Models\Group_Item;
use App\Models\Item;
use App\Models\Meta;
use App\Models\Order;
use App\Models\TotalTopList;
use App\Models\User;
use App\Models\Wards;
use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Collection;
use App\Models\CollectionProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


View::composer('frontend.widget.banner', function ($view) {

    $data = "ok";
    return $view->with('data', $data);
});
View::composer('frontend.widget.slider', function ($view) {

    $data = "ok";
    return $view->with('data', $data);
});
