<div class="infinite-scroll">
<div class="ecom-products-grids row">

  <!-- <div class="infinite-scroll"> -->
  @foreach($products as $product)
  <div class="col-lg-4 col-6 product-incfhny mb-4">
    <div class="product-grid2 transmitv">
      <div class="product-image2">
        <a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">
          @if($product->image_product->first())
          <img class="pic-1 img-fluid" src="{{asset($product->image_product->first()->image)}}">
          @if($product->image_product->skip(1)->first())
          <img class="pic-2 img-fluid" src="{{asset($product->image_product->skip(1)->first()->image)}}">
          @else
          <img class="pic-2 img-fluid" src="{{asset($product->image_product->first()->image)}}">
          @endif
          @endif
        </a>
        <ul class="social">
          <li><a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}" data-tip="Quick View"><span
                class="fa fa-eye"></span></a></li>

          <!-- <li><a href="ecommerce.html" data-tip="Add to Cart"><span
                class="fa fa-shopping-bag"></span></a>
          </li> -->
        </ul>
        <div class="transmitv single-item">
          <form action="#" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="transmitv_item" value="{{$product->title}}">
            <input type="hidden" name="amount" value="{{$product->cena}}">

            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
              Dodaj u korpu
            </button>
          </form>
        </div>
      </div>
      <div class="product-content">
        <h3 class="title"><a href="{{url('proizvod/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->title))}}">{{$product->title}}</a>
        </h3>
        <span class="price">{{$product->cena}} €</span>
      </div>
    </div>
  </div>
  @endforeach
{{ $products->links() }}
</div>
</div>
