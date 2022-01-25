<section class="w3l-ecommerce-main"  style="background:#f4f4f4;">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Slicni <span>Proizvodi</span></h3>
			<p class="text-center">Proizvodi iz kategorije</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach($related as $rel)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="{{url('proizvod/'.str_replace(' ','_',$rel->category->title).'/'.str_replace(' ','_',$rel->title))}}">
								  @if($rel->image_product->first()->image)
								<img class="pic-1 img-fluid" src="{{asset($rel->image_product->first()->image)}}">
								@if($rel->image_product->skip(1)->first())
			          <img class="pic-2 img-fluid" src="{{asset($rel->image_product->skip(1)->first()->image)}}">
			          @else
			          <img class="pic-2 img-fluid" src="{{asset($rel->image_product->first()->image)}}">
			          @endif
								@endif
							</a>
							<ul class="social">
									<li><a href="{{url('proizvod/'.str_replace(' ','_',$rel->category->title).'/'.str_replace(' ','_',$rel->title))}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<!-- <li><a href="ecommerce.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li> -->
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="{{$rel->title}}">
									<input type="hidden" name="amount" value="{{$rel->cena}}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{url('proizvod/'.str_replace(' ','_',$rel->category->title).'/'.str_replace(' ','_',$rel->title))}}">{{$rel->title}}</a></h3>
							<!-- <span class="price"><del>$975.00</del>$899.99</span> -->
								<span class="price">{{$rel->cena}} €</span>
						</div>
					</div>
				</div>
				@endforeach



			</div>
			<!-- //row-->
		</div>
	</div>
</section>
