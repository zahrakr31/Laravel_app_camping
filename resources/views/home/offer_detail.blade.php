<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>CampBook - CampBooking space</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
        @include('home.header')



      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding: 30px;">

           <div class="img-box" style="padding: 20px;">
              <img  src="offer/{{$offer->image }}" alt="" height = "250" width = "270">
           </div>
           <div class="detail-box">
              <h5 style="color: black;">
                 {{ $offer->title }}
              </h5><br>
                  @if ($offer->discount_price!=null)

             <h6 style="color: red;">Discount price : <br>{{ $offer->discount_price }} DT
             </h6>
             <h6 style="text-decoration: line-through; color:blue;">
                 {{ $offer->price }} DT
              </h6>
              @else
              <h6 style="color:blue;">
                 Price :
                 <br>
                 {{ $offer->price }} DT
              </h6>
             @endif
             <h6>Date : {{ $offer->date }}</h6><br>
             <h6 style="color: red;">{{ $offer->destination }}</h6><br>
             <h6>Number of seats available : {{ $offer->number_seats }} </h6>
             <h6>Offer Detail : {{ $offer->description}}</h6><br>

             <form action="{{ url('add_wishlist',$offer->id) }}" method="POST">

                @csrf
                <div class="row">
                <div class="col-md-4">
                    <input type="number" name="number_seats" value="1" min="1" style="width: 100px;">
                </div>

                <div class="col-md-4">
                     <input type="submit"value="Add to Wishlist ♥">
                </div>

                </div>
            </form>

           </div>
        </div>
     </div>

      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">CampBook</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">Ghofrane Mhamdi</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
