<?php


return [

    'media' => [
        'url' => env('MEDIA_URL'),
    ],

    'user-qtv' => [
        'need_set_permission'=>true,
        'status' => [
            '1' => 'Hoạt động',
            '2' => 'Chờ kích hoạt',
            '0' => 'Khóa'
        ],
        'account_type' => [
            '1' => 'Quản trị viên (Nội bộ)',
            '2' => 'Thành viên'
        ]
    ],

    'user' => [
        'status' => [
            '1' => 'Hoạt động',
            '2' => 'Chờ kích hoạt',
            '0' => 'Khóa'
        ],
        'account_type' => [
            '1' => 'Quản trị viên (Nội bộ)',
            '2' => 'Thành viên'
        ],

        'is_idol' => [
            '0' => 'Không',
            '1' => 'Có'
        ],
        'is_agency_charge' => [
            '0' => 'Không',
            '1' => 'Có'
        ],
        'type_idol' => [
            '1' => 'Idol',
            '2' => 'Đang chờ phê duyệt'
        ],
        'effect_profile' => [
            '0' => 'Hiệu ứng tuyết rơi',
            '1' => 'Hiệu ứng trái tim rơi',
            '2' => 'Hiệu ứng mưa'
        ],
        'image_fake' =>[
            '0' => 'https://media.passionzone.net/storage/upload/images/default-placeholder%20111(9).png',
            '1' => 'https://media.passionzone.net/storage/upload/images/logo%20pubg%20mobile.png',
            '2' => 'https://media.passionzone.net/storage/upload/images/toc-chien.jpg',
            '3' => 'https://media.passionzone.net/storage/upload/images/playtogether.jpg',
        ],

        'payment_limit'=>1000000,
        'limit_fail_charge'=>5
    ],
    'developer' => [
        'title'=>"Thông tin đội ngũ phát triển",
        'key'=>"attribute",
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động'
        ],
    ],

    'user-action' => [
        'action' => [
            'vote' => 'Vote',
            'comment' => 'Comment',
            'block' => 'Block'
        ],
    ],

    'language-nation' => [
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động',
        ],

        'is_default' => [
            '0' => 'Không',
            '1' => 'Mặc định',
        ],
    ],

    'language-key' => [
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động',

        ],
    ],

    'menu-category' => [
        'title'=>"Menu trang chủ",
        '__include'=>[],
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động',

        ],
    ],



    'order' => [
        'title'=>"Quản lý đơn hàng",
        'status-confirm' => [
            '0' => 'Hủy phòng',
            '1' => 'Thành công',
            '2' => 'Chờ xử lý',
        ],
    ],
    'order_detail' => [
        'progress'=>[
            'title' => 'Tiến độ công việc',
            'key' => 'progress',
        ],
    ],

    'group' => [
        'title'=>"Danh mục",
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động',
        ],
    ],
    'locale' => [
        'title'=>"Địa điểm",
        'status' => [
            '1' => 'Hoạt động',
            '0' => 'Ngừng hoạt động',
        ],
    ],





];





//demo params fields
//
//'params_field'=>[
//
//    [
//        'label' => 'Tiêu đề trang', // you know what label it is
//        'name' => 'params[text]', // unique name for field
//        'type' => 'text', // input fields type
//        'data' => 'string', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => 'demo' // default value if you want
//    ],
//
//    [
//        'label' => 'Demo Checkbox', // you know what label it is
//        'name' => 'params[checkbox]', // unique name for field
//        'type' => 'text', // input fields type
//        'data' => 'string', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => '' // default value if you want
//    ],
//    [
//        'label' => 'Demo ckeditor', // you know what label it is
//        'name' => 'params[ckeditor]', // unique name for field
//        'type' => 'ckeditor', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => '', // default value if you want
//        'height' => '400' // default height if you want
//
//    ],
//
//    [
//        'label' => 'Demo ckeditor-source', // you know what label it is
//        'name' => 'params[ckeditor-source]', // unique name for field
//        'type' => 'ckeditor-source', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => '', // default value if you want
//        'height' => '400' // default height if you want ckfinder
//
//    ],
//
//    [
//        'label' => 'Demo image', // you know what label it is
//        'name' => 'params[image]', // unique name for field
//        'type' => 'image', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => '', // default value if you want
//        'height' => '' // default height if you want ckfinder
//
//    ],
//    [
//        'label' => 'Demo image', // you know what label it is
//        'name' => 'params[image]', // unique name for field
//        'type' => 'image', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => '', // default value if you want
//        'height' => '' // default height if you want ckfinder
//
//    ],
//
//    [
//        'label' => 'Demo number ', // you know what label it is
//        'name' => 'params[number]', // unique name for field
//        'type' => 'number', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => 'demo', // default value if you want
//        'height' => '' // default height if you want ckfinder
//
//    ],
//
//    [
//        'label' => 'Demo select', // you know what label it is
//        'name' => 'params[select]', // unique name for field
//        'type' => 'select', // input fields type
//        'data' => '', // data type, string, int, boolean
//        'rules' => '', // validation rule of laravel
//        'div_parent_class' => 'col-12 col-md-12', // div parent class for input
//        'class' => '', // any class for input
//        'value' => 'demo', // default value if you want
//        'height' => '', // default height if you want ckfinder
//        'options' => [
//            0 => "Có",
//            1 => "Không"
//        ] // default height if you want ckfinder
//
//
//    ],
//
//
//    [
//          Chia cột theo gird
//        [
//            'label' => 'Demo Checkbox', // you know what label it is
//            'name' => 'params[checkbox-group]', // unique name for field
//            'type' => 'checkbox', // input fields type
//            'data' => 'string', // data type, string, int, boolean
//            'rules' => '', // validation rule of laravel
//            'div_parent_class' => 'col-12 col-md-4', // div parent class for input
//            'class' => '', // any class for input
//            'value' => 'demo' // default value if you want
//        ],
//        [
//            'label' => 'Demo checkbox', // you know what label it is
//            'name' => 'params[checkbox-group]', // unique name for field
//            'type' => 'checkbox', // input fields type
//            'data' => 'string', // data type, string, int, boolean
//            'rules' => '', // validation rule of laravel
//            'div_parent_class' => 'col-12 col-md-4', // div parent class for input
//            'class' => '', // any class for input
//            'value' => 'demo' // default value if you want
//        ],
//        [
//            'label' => 'Demo ', // you know what label it is
//            'name' => 'params[checkbox-group]', // unique name for field
//            'type' => 'checkbox', // input fields type
//            'data' => 'string', // data type, string, int, boolean
//            'rules' => '', // validation rule of laravel
//            'div_parent_class' => 'col-12 col-md-4', // div parent class for input
//            'class' => '', // any class for input
//            'value' => 'demo' // default value if you want
//        ]
//    ]
//
//],
//
