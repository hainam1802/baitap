<?php

use  Illuminate\Contracts\Container\Container;

// Aside menu
return [

    'items' => [
        // Dashboard

        [
            'title' => '- Quản lý khu ở',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.category.index',
            'page' => '',
            'new-tab' => false,
        ],
        [
            'title' => '- Quản lý kiểu phòng',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.group.index',
            'page' => '',
            'new-tab' => false,
        ],
        [
            'title' => '- Quản lý địa điểm',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.locale.index',
            'page' => '',
            'new-tab' => false,
        ],
        [
            'title' => '- Danh sách phòng',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.product.index',
            'page' => '',
            'new-tab' => false,
        ],
        [
            'title' => '- Quản lý thành viên',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.user.index',
            'page' => '',
            'new-tab' => false,
        ],
        [
            'title' => '- Quản lý đơn hàng',
            'root' => true,
            'permission' => '',
            'icon' => '',
            'route' => 'admin.order.index',
            'page' => '',
            'new-tab' => false,
        ],
    ]
];
