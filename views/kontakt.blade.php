@extends('template')
@section('sadrzaj')
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny"  style="background: url({{url('assets/images/home_banners/contact.jpg')}}) no-repeat center;
  background-size: cover;">

    <div class="top-header-content">

      @include('kontakt/menu')
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Pozovite nas</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.html">Pocetna</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Kontakt</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
</section>
 <!-- contacts -->
 <section class="w3l-contacts-8">
    <div class="contacts-9 section-gap py-5">
      <div class="container py-lg-5">
        <div class="row top-map">
          <div class="col-lg-6 partners">
            <div class="cont-details">
              <h3 class="hny-title mb-0">Pozovite <span>nas</span></h5>
              <p class="mb-5">Trudimo se da proizvedemo originalni nameštaj visokog kvaliteta.</p>
              <p class="margin-top"><span class="texthny">Telefon : </span> <a href="tel:+381 69 102 75 46">+381 69 102 75 46</a></p>
              <p class="margin-top"><span class="texthny">Telefon : </span> <a href="tel:+381 63 874 84 24">+381 63 874 84 24</a></p>
              <p> <span class="texthny">Email : </span> <a href="mailto:mladenovic90@live.com">
                  mladenovic90@live.com</a></p>
              <p class="margin-top"> Vladicin Han</p>
            </div>
            <div class="hours">
              <h3 class="hny-title">Radno <span>Vreme</span></h5>
              <h6>8h-15h</h6>
              <!-- <p> Monday to Friday 8.00 am - 6.00 pm</p>
              <p> Saturday and Sunday - Closed</p> -->
              <h6 class="margin-top">Podrska:</h6>
              <p>8h-22h</p>
              <!-- <p> Saturday 10.00 am - 4.00 pm</p>
              <p> Sunday - Closed</p> -->
            </div>
          </div>
          <div class="col-lg-6 map">
            <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
              frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
              <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=vladicin%20han&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe></div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=vladicin%20han&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://youtube-embed-code.com">youtube embed code</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">responsive google map embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->
    <!-- <div class="map-content-9 form-bg-img">
      <div class="layer section-gap py-5">
        <div class="container py-lg-5">
          <div class="form">
            <h3 class="hny-title two text-center">Fill out the form.</h3>
            <form action="https://sendmail.w3layouts.com/submitForm"class="mt-md-5 mt-4" method="post">
              <div class="input-grids">
                <input type="text" name="w3lName" id="w3lName" placeholder="Name">
                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email" required="" />
                <input type="subject" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
              </div>
              <div class="input-textarea">
                <textarea name="w3lMessage" id="w3lMessage" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" class="btn">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> -->
  </section>
  <!-- //contacts -->


@stop
