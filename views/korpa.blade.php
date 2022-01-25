@extends('template')
@section('sadrzaj')
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny"  style="  background: url('assets/images/cart.jpg') no-repeat center;">

    <div class="top-header-content">

      @include('about_us/menu')
      @include('about_us/top_banner')
    </div>
</section>

@include('korpa/products')
   <!-- //content-6-section -->




@stop
