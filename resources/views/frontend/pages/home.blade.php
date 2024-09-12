@extends('frontend.layouts.master')


@section('frontend_content')
    @include('frontend.pages.widget.banner')
    @include('frontend.pages.widget.product-hot')
    @include('frontend.pages.widget.product-product_variation')
    @include('frontend.pages.widget.special_offer')
@endsection
