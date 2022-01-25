@extends('template')
@section('sadrzaj')
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny"  style="  background: url({{asset($about->top_banner_image)}}) no-repeat center; background-size: cover;">

    <div class="top-header-content">

      @include('about_us/menu')
      @include('about_us/top_banner')
    </div>
</section>

@include('about_us/right_banner_txt_link')
   <!-- //content-6-section -->


<!-- include('about_us/left_banner_nums_txt') -->
   <!-- //specification-6-->

<!-- include('about_us/icons_header_txt') -->
<!-- //content-6-section -->
<!-- include('about_us/ofering_icons') -->
<!-- features-4 -->

	<!--/team-sec-->
	<!-- include('about_us/the_team') -->
	<!--//team-sec-->



@stop
