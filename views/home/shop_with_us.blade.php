<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Nasi <span>Proizvodi</span></h3>
			<p class="text-center">Odaberite svoj omiljeni, isporuka odmah</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach($products->take(12) as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">
								@if($product->image_product->first())
								<img class="pic-1 img-fluid" src='{{$product->image_product->first()->image}}'>
								@if($product->image_product->skip(1)->first())
			          <img class="pic-2 img-fluid" src="{{asset($product->image_product->skip(1)->first()->image)}}">
			          @else
			          <img class="pic-2 img-fluid" src="{{asset($product->image_product->first()->image)}}">
			          @endif
								@endif
							</a>
							<ul class="social">
									<li><a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<!-- <li><a href="ecommerce.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li> -->
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="{{$product->title}}">
									<input type="hidden" name="amount" value="{{$product->cena}}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">{{$product->title}}</a></h3>
							<span class="price">{{$product->cena}} €</span>
						</div>
					</div>
				</div>
				@endforeach

        <!-- hjkjhkjkhjhkjhkjhkjhkjhk -->





			</div>
			<!-- //row-->
		</div>
	</div>
</section>
