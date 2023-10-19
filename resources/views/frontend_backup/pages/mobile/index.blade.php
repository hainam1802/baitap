@extends('frontend_backup.layouts.master')
@section('seo_head')
    @include('frontend_backup.widget.__seo_head')
@endsection
@section('content')
<!-- slider -->
{!! widget('frontend_backup.widget.mobile._slide') !!}


{!! widget('frontend_backup.widget.mobile._banner_sales') !!}

{!! widget('frontend_backup.widget.mobile._flash_sales') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_1') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_2') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_3') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_category') !!}

{!! widget('frontend_backup.widget.desktop._intro_text') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_article') !!}


{!! widget('frontend_backup.widget.mobile._section_widget_banner_nature') !!}

@endsection
