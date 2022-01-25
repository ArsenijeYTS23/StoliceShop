@extends('template')
@section('sadrzaj')

<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">
      @include('blog/menu')
      @include('blog/top_banner')
    </div>
</section>
<section class="blog-post-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container py-lg-5 px-lg-5">
			<div class="blog-inner-grids row">
				@include('blog/left_blogs')
				@include('blog/right_links')
			</div>
			<!--/pagination-->
			@include('blog/pagination')
			<!--//pagination-->

		</div>
	</div>
	<!--//mag-content-->
</section>




@stop
