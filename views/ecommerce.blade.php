@extends('template')
@section('sadrzaj')


<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny" style="background: url({{url('assets/images/home_banners/ecom.jpg')}}), no-repeat center; background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  -moz-background-size: cover;">

    <div class="top-header-content">

      @include('ecommerce/menu')
      @include('ecommerce/main_banner')
    </div>
</section>
<section class="w3l-ecommerce-main-inn">
	<!--/mag-content-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
			<!--/row1-->
			<div class="ecommerce-grids row">
				@include('ecommerce/left_filters')
				<div class="ecommerce-right-hny col-lg-8">
					@include('ecommerce/showing_sortby')
					<!-- /row-->
					@include('ecommerce/list_products')
					<!-- //row-->
					<!--/row2-->
					<!-- include('ecommerce/ecommerce_slider') -->

					<!--//row22-->
				</div>
			</div>
			<!--//row1-->

			<!--/pagination-->
			@include('ecommerce/pagination')
			<!--//pagination-->

		</div>
	</div>
	<!--//mag-content-->
</section>

@stop
