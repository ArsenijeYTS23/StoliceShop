<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8" style="background: url({{asset($right_banner->video_banner_image)}}) no-repeat center; background-size: cover;">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
												<iframe src="{{$right_banner->video_banner_source}}" frameborder="0"
												allow="autoplay; fullscreen" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					      </div>
				  </div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">  {!! $right_banner->video_banner_title  !!}
						</h3>
						<p>{{$right_banner->video_banner_txt}}</p>
						<!-- <a href="ecommerce.html" class="read-more btn">
							Shop Now
						</a> -->
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
