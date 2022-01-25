<div class="content-baner-inf">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      @foreach($banner_slide as $banner)
      @if($banner_slide->first()->id == $banner->id)
      <div class="carousel-item active"  style="background: url({{$banner->image}}) no-repeat center; background-size: cover;">
        @else
        <div class="carousel-item"  style="background: url({{$banner->image}}) no-repeat center; background-size: cover;">
          @endif
        <div class="container">
          <div class="carousel-caption">
            <h3>{{$banner->title}}
              <br><h2>{{$banner->text1}}</h2></h3>
            <a href="{{$banner->link}}" class="shop-button btn">
              Pogledaj
            </a>

          </div>
        </div>
      </div>
      @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
