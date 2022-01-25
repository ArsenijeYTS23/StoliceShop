@extends('template')
@section('sadrzaj')

<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">
      @include('blog_single/menu')
      @include('blog_single/top_banner')
    </div>
</section>

<section class="blog-post-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container py-lg-5">
			<div class="blog-inner-grids">
				<div class="mag-post-left-hny">
					<div class="mag-hny-content">
						<!--/set-1-->
						<div class="blog-pt-grid-content">
							@include('blog_single/blog_content')
							<!--//post-details-sec1-->


							<!--/admin-->
							@include('blog_single/author')
							<!--//admin-->
								<!--/admin-->
							@include('blog_single/author2_leave_comment')
							<!--//leave-->
							<!--//mag-hny-content-4-->
						</div>
					</div>
				</div>
			</div>
			<!--//mag-content-->

</section>





@stop
