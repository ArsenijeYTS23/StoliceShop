<section class="w3l-wecome-content-6">
  <form method="get" action="{{url('poruci')}}">
	<!-- /content-6-section -->
  @foreach ($product_amount as $key => $ara)
	  <div class="ab-content-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="welcome-grids row">
							<div class="col-lg-6 mb-lg-0 mb-5">

               <h3 class="hny-title"><span>Proizvod</span></h3>
                <input type="hidden" name="id.{{$key}}" value="{{$ara[0]->id}}"/>
									<h3 class="hny-title">{{$ara[0]->title}}</h3><hr>
            <h3 class="hny-title"><span>Kolicina</span></h3>
								<input class="form-control" style="width:80px" name="amount.{{$key}}" value="{{$ara[1]}}"><hr>
                <h3 class="hny-title"><span>Cena jednog proizvoda</span></h3>

 									<h3 class="hny-title">{{$ara[0]->cena}}</h3>
							</div>
							<div class="col-lg-6 welcome-image">
								<img style="width:300px" src="{{$ara[0]->image_product->first()->image}}" class="img-fluid" alt="" />
							</div>

						</div>

				 </div>
			 </div><hr style="   height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
       @endforeach
       <section class="w3l-contacts-8">
          <div class="map-content-9 form-bg-img">
            <div class="layer section-gap py-5">
              <div class="container py-lg-5">
                <div class="form">
                    <div class="input-grids">
                      <input type="text" name="w3lName" id="w3lName" placeholder="Name">
                      <input type="email" name="w3lSender" id="w3lSender" placeholder="Email" required="" />
                      <input type="subject" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
                    </div><br><br>

                    <button type="submit" class="btn">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
	 </section>
