@extends('template')
@section('sadrzaj')
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		@include('includes/menu')
		<div class="bannerhny-content">

			<!--/banner-slider-->
			@include('home/banner_slide')
			<!--//banner-slider-->
			<!--//banner-slider-->
			@include('home/top_right_banner')

		</div>

</section>
<!-- //w3l-banner-slider-main -->
@include('home/hand_picker')
<!-- //content-6-section -->

@include('home/second_right_banner')
   <!-- //specification-6-->


@include('home/shop_with_us')
<!-- //products-->

@include('home/video_link')
<!-- //video-6-->


<!-- include('home/central_banner') -->


<!-- //content-6-section -->


<!-- include('home/blog_posts') -->

<!-- //post-grids-->
<!-- include('home/customers_love') -->
<!-- //customers-->
<!-- include('home/subscribe') -->
<!-- //customers-6-->

@stop
