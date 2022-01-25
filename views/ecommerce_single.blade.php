@extends('template')
@section('sadrzaj')
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny" style="background: url({{url($product->image_product->first()->image)}}) no-repeat center;
  background-size: cover;">

    <div class="top-header-content">
      @include('ecommerce_single/menu')
      @include('ecommerce_single/main_banner')
    </div>
</section>
@include('ecommerce_single/main_in')
<!-- include('ecommerce_single/two_banners') -->
<!-- //content-6-section -->
@include('ecommerce_single/featured')
<!-- //products-->



@stop
