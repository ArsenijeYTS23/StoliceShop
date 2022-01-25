<div class="breadcrumb-contentnhy">
  <div class="container">
    <nav aria-label="breadcrumb">
      <h2 class="hny-title text-center">{{$product->title}}</h2>
      <ol class="breadcrumb mb-0">
        <li><a href="{{url('/')}}">Pocetna</a>
          <span class="fa fa-angle-double-right"></span></li>

        <li ><a href="{{url('list/'.str_replace(' ','_',$product->category->title))}}">{{$product->category->title}}</a>
          <span class="fa fa-angle-double-right"></span></li>
        <li class="active">{{$product->title}}</li>
      </ol>
    </nav>
  </div>
</div>
