<div class="breadcrumb-contentnhy">
  <div class="container">
    <nav aria-label="breadcrumb">
      <h2 class="hny-title text-center">{{ $category === 0 ? "Svi proizvodi" : str_replace('_',' ',$category)}}</h2>
      <ol class="breadcrumb mb-0">
        <li><a href="{{url('/')}}">Pocetna</a>
          <span class="fa fa-angle-double-right"></span></li>
        <li class="active">{{ $category === 0 ? "Svi proizvodi" : str_replace('_',' ',$category) }}</li>
      </ol>
    </nav>
  </div>
</div>
