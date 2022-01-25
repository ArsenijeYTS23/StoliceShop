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
          <a href="{{url('list/'.str_replace(' ','_',$category->title))}}">{{$category->title}}</a>
            <span class="badge badge-primary badge-pill">{{$category->product->count()}}</span>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </aside>
  <!--//ecommerce-left-hny-->
</div>
