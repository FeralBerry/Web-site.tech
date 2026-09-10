@extends('front.clothing.layout.layout')
@section('breadcrumb')
    @include('front.clothing.layout.breadcrumb')
@endsection
@section('content')
    <!--shop main area are start-->
    <div class="shop-main-area ptb-70">
        <div class="container">
            <div class="row">
                @include('front.clothing.section.shopSidebar')
                <div class="col-md-9 col-sm-8 col-xs-12">
                    @include('front.clothing.section.shopMain')
                </div>
            </div>
        </div>
    </div>
    <!--shop main area are end-->
    @include('front.clothing.section.quickview')
@endsection
