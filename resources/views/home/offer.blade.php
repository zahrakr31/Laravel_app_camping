<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>Camping Destinations</span>
          </h2>
       </div>
       <div class="row">
           @foreach ($offer as $offers )


        <div class="col-sm-6 col-md-4 col-lg-4">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="{{ url('offer_detail',$offers->id) }}" class="option1">
                     Offer Details
                    </a>
                    <form action="{{ url('add_wishlist',$offers->id) }}" method="POST">

                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                            <input type="number" name="number_seats" value="1" min="1" style="width: 100px;">
                        </div>

                        <div class="col-md-4">
                             <input type="submit"value="Add to Wishlist">
                        </div>

                        </div>
                    </form>
                  <!--  <a href="" class="option2">
                    Book Now
                    </a> -->
                 </div>
              </div>
              <div class="img-box">
                 <img src="offer/{{$offers->image }}" alt="">
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" width="40%" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" margin="auto">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
              <h5 style="color:black; margin: auto; width:20%; ">

                {{ $offers->destination }}</h5> <br>

              <div class="detail-box">

                 <h5>
                    {{ $offers->title }}
                 </h5>

                     @if ($offers->discount_price!=null)

                <h6 style="color: #dc3545;">Discount price<br>{{ $offers->discount_price }} DT
                </h6>
                <h6 style="text-decoration: line-through; color:blue;">
                    {{ $offers->price }} DT
                 </h6>
                 @else
                 <h6 style="color:blue;">
                    Price
                    <br>
                    {{ $offers->price }} DT
                 </h6>
                @endif
              </div>
           </div>
        </div>
        @endforeach
        <span style="padding-top: 20px;">
        {{ $offer->links('pagination::bootstrap-4') }}</span>
    </div>
 </section>
