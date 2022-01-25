@include('admin/admin_header')

<h1>Edit Proizvoda</h1>



<section class="w3l-ecommerce-main-inn">
	<!--/mag-content-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
			<!--/row1-->
			<div class="ecommerce-grids row">
        <div class="ecommerce-left-hny col-lg-4">
          <!--/ecommerce-left-hny-->
          <aside>
            <div class="sider-bar">

              <!-- /Gallery-imgs -->

              <div class="single-gd mb-5">
                <h4>Nase <span>Kategorije</span></h4>
                <ul class="list-group single">
                  @foreach($categories as $category)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="{{url('admin/list_product/'.str_replace(' ','_',$category->title))}}">{{$category->title}}</a>
                    <span class="badge badge-primary badge-pill">{{$category->product->count()}}</span>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </aside>
          <!--//ecommerce-left-hny-->
        </div>
				<div class="ecommerce-right-hny col-lg-8">

<div class="ecom-products-grids row">
  @foreach($products as $product)
  <div class="col-lg-4 col-6 product-incfhny mb-4">
    <div class="product-grid2 transmitv">
      <div class="product-image2">
        <a href="{{url('/admin/edit_product/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">
					  @if($product->image_product->first())
          <img class="pic-1 img-fluid" src="{{asset($product->image_product->first()->image)}}">
          @if($product->image_product->skip(1)->first())
          <img class="pic-2 img-fluid" src="{{asset($product->image_product->skip(1)->first()->image)}}">
          @else
          <img class="pic-2 img-fluid" src="{{asset($product->image_product->first()->image)}}">
          @endif
					@endif
        </a>


      </div>
      <div class="product-content">
        <h3 class="title"><a href="{{url('/admin/edit_product/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">{{$product->title}}</a>
        </h3>
        <span class="price">{{$product->cena}} €</span>
      </div>
    </div>
  </div>
  @endforeach


</div>
{{ $products->links() }}

</div>
</div>


</div>
</div>
<!--//mag-content-->
</section>

@include('admin/admin_footer')
