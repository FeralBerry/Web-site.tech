@extends('front.clothing.layout.layout')
@section('breadcrumb')
    @include('front.clothing.layout.breadcrumb')
@endsection
@section('content')
    @include('front.clothing.section.cartCheckout')
    @include('front.clothing.section.quickview')
@endsection
