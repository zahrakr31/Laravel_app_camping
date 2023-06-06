<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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

    <!-- inner page section -->

   </head>
   <body class="sub_page">

    @include('home.header')
<section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>Testimonial</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="client_section layout_padding">
        <div class="container">
           <div class="heading_container heading_center">
              <h2>
                 Customer's Testimonial
              </h2>
           </div>
           <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="box col-lg-10 mx-auto">
                       <div class="img_container">
                          <div class="img-box">
                             <div class="img_box-inner">
                                <img src="images/client.jpg" alt="">
                             </div>
                          </div>
                       </div>
                       <div class="detail-box">
                          <h5>
                             Anna Trevor
                          </h5>
                          <h6>
                             Customer
                          </h6>
                          <p> From our camping trip, i learned that there was plenty of entertainement to be found in exploring nature i could not wait to find out what other secrets nature had for me to see.



                        </p>
                       </div>
                    </div>
                 </div>

              <div class="carousel_btn_box">
                 <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                 <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                 <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                 <span class="sr-only">Next</span>
                 </a>
              </div>
           </div>
        </div>
     </section>


      <!-- end client section -->
      <!-- footer section -->
      @include('home.footer')
      <div class="cpy_">
        <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">CampBook</a><br>

           Distributed By <a href="https://themewagon.com/" target="_blank">Ghofrane Mhamdi</a>

        </p>
     </div>
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>
