<section class="w3l-ecommerce-main-inn">
	<!--/ecommerce-single-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
			<!--/row1-->
			<div class="sp-store-single-page row">
				<div class="col-lg-5 single-right-left">
					<div class="flexslider1">

						<ul class="slides">
							@foreach($product->image_product as $image)
							<li data-thumb="{{url($image->image)}}">
								<div class="thumb-image"> <img src="{{url($image->image)}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
   @endforeach


						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
				<div class="col-lg-7 single-right-left pl-lg-4">
					<h3>{{$product->title}}
					</h3>
					<div class="caption">

						<ul class="rating-single"   style="display:none">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star-half yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>

						<h6>
							<span class="item_price">€{{$product->cena}}</span>
							 +dostava {{$product->dostava}} din
						</h6>
					</div><br><br>

					<div class="desc_single mb-4">
						<h5>Opis Proizvoda:</h5>
						<p>{!!$product->text!!}</p>
					</div>
					<div class="desc_single mb-4">
						<h5>Materijal:</h5>
						<p>{!!$product->materijal!!}</p>
					</div>
					<div class="desc_single mb-4">
						<h5>Dimenzije:</h5>
						<p>{!!$product->dimenzije!!}</p>
					</div>

					<div class="eco-buttons mt-5">

						<div class="transmitv single-item">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="transmitv_item" value="{{$product->title}}">
								<input type="hidden" name="amount" value="{{$product->cena}}">
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart read-2">
									Dodaj u korpu
								</button>
							</form>
						</div>
						<!-- <div class="buyhny-now"> <a href="#buy" class="action btn">Buy Now </a></div> -->

					</div>

				</div>
			</div>
		</div>
		<!--//row1-->
	</div>
	<!--//ecommerce-single-->
</section>
