<section class="w3l-grids-hny-2">
	<!-- /content-6-section -->
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">

			<h3 class="hny-title mb-0 text-center">Izaberi <span>Kategoriju</span></h3>
			<!-- <p class="mb-4 text-center">Handpicked Favourites just for you</p> -->
			<div class="welcome-grids row mt-5">
				@foreach($categories as $cat)
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="{{url('list/'.str_replace(' ','_',$cat->title))}}">
										<img src="{{$cat->image}}" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">{{$cat->title}}
								</div>
							</a>
						</div>
						<h4><a href="{{url('list/'.str_replace(' ','_',$cat->title))}}">{{$cat->title}}</a></h4>

				</div>
				@endforeach

				<!-- <div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="ecommerce.html">
										<img src="assets/images/categories/2.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="ecommerce.html">
								Watches</a></h4>


				</div> -->
				<!-- <div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/categories/3.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="ecommerce.html">Shoes</a></h4>


				</div> -->
				<!-- <div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="ecommerce.html">
										<img src="assets/images/categories/4.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="ecommerce.html">Suits</a></h4>

				</div> -->
				<!-- <div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="ecommerce.html">
										<img src="assets/images/categories/5.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="ecommerce.html">
								Accessories</a></h4>


				</div> -->
				<!-- <div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="ecommerce.html">
										<img src="assets/images/categories/6.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="ecommerce.htmlL">
								Fragrances</a></h4>


				</div> -->
			</div>

		</div>
	</div>
</section>
