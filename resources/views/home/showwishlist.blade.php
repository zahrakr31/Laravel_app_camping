<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      <style type="text/css">
      .center{
          margin: auto;
          width: 70%;
          text-align: center;
          padding: 30px;
      }
      table,th,td{
          border: 1px solid #343a40;

      }
      .th_deg
      {
       font-size: 20px;
       background: #dc3545;

      }
      .img_deg
      {
          height:200px ;
          width:200px ;
      }
      .total_deg
      {
       font-size: 20px;
       font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
       padding: 40px;
       color: #dc3545;
       font-stretch: extra-condensed;

      }
      .h1_deg
      {
          color: #dc3545;
          font-size: 30px;
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

      }
      </style>


   </head>
   <body>
      <div class="hero_area">
        @include('home.header')
        @if (session()->has('message'))
      <div class="alert alert-success">

           {{ session()->get('message') }}
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
         </div>
      @endif
      <div class="center">
        <table>

            <tr><?php $totalprice=0; ?>
             @foreach ( $wishlist as $wishlist )
               <th class="th_deg">Image</th>
               <th class="th_deg">Camping</th>
               <th class="th_deg">Number of persons</th>
               <th class="th_deg">Price (DT)</th>
               <th class="th_deg">Action</th>
           </tr>



           <tr>
              <td><img class="img_deg" src="/offer/{{ $wishlist->image}}"></td>
              <td><strong>{{ $wishlist->offer_title }}</strong></td>
              <td><strong>{{ $wishlist->number_seats }}</strong></td>
              <td><strong>{{ $wishlist->price}} DT</strong></td>
              <td><a class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to remove this offer from the wishlist?')" href="{{ url('/remove_wishlist',$wishlist->id )}}">Remove Offer</a></td>
           </tr>
           <?php  $totalprice=$totalprice + $wishlist->price ; ?>
          @endforeach

        </table>
        <div>

            <h1 class="total_deg">Total Price : {{ $totalprice }} DT</h1>
        </div>
        <div>

            <h1 class="h1_deg"><strong>Proceed to Book</strong></h1><br>
            <a href="{{ url('cash_book') }}" class="btn btn-success">Cash at the agency</a>
            <a href="" class="btn btn-success">Pay Using Card</a>
        </div>



      </div>


      <!-- why section -->

      @include('home.why')


      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
       @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
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
