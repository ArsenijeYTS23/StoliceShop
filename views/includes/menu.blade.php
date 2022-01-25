<header class="tophny-header">
  <div class="container-fluid">
    <div class="top-right-strip row">
      <!--/left-->
      <div class="top-hny-left-content col-lg-6 pl-lg-0">
        <h6><a href="{{url('/')}}" target="_blank"> Klikni za<span
              class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
              class="hignlaite">Vise detalja</span></a></h6>
      </div>
      <!--//left-->
      <!--/right-->
      <ul class="top-hnt-right-content col-lg-6">

        <li class="button-log usernhy">
          <!-- <a class="btn-open" href="#">
            <span class="fa fa-user" aria-hidden="true"></span>
          </a> -->
        </li>
        <li class="transmitvcart galssescart2 cart cart box_1">
          <form action="#" method="post" class="last">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="display" value="1">
            <button class="top_transmitv_cart" type="submit" name="submit" value="">
              My Cart
              <span class="fa fa-shopping-cart"></span>
            </button>
          </form>
        </li>
      </ul>
      <!--//right-->

    </div>
  </div>
  <!--/nav-->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid serarc-fluid">
      <a class="navbar-brand" href="{{url('/')}}">
        Povoljne <span class="lohny">Stolice</span></a>
      <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
      <!--/search-right-->
      <div class="search-right">

        <!-- <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
          <span class="search-text">Search here</span></a>

        <div id="search" class="pop-overlay">
          <div class="popup">

            <form action="#" method="post" class="search-box">
              <input type="search" placeholder="Keyword" name="search" required="required"
                autofocus="">
              <button type="submit" class="btn">Search</button>
            </form>

          </div>
          <a class="close" href="#">×</a>
        </div> -->

      </div>
      <!--//search-right-->
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Pocetna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('o_nama')}}">O nama</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kupi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="{{url('list')}}">Svi proizvodi</a> -->
              @foreach($categories as $category)
              <a class="dropdown-item" href="{{url('list/'.str_replace(' ','_',$category->title))}}">{{$category->title}}</a>
              @endforeach

            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{url('kontakt')}}">Kontakt</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!--//nav-->
</header>
