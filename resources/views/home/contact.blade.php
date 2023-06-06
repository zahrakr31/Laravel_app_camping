<!-- header section strats -->
<header class="header_section">
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


   </header>
   <!-- end header section -->

         <!-- end header section -->

      <!-- inner page section -->
      <!-- end inner page section -->
      <!-- why section -->
      <body>
      @include('home.header')
        @if (session()->has('message'))
      <div class="alert alert-success">

           {{ session()->get('message') }}
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
         </div>
      @endif

      <section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>Contact us</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>
      <section class="why_section layout_padding">
        <div class="container">

           <div class="row">
              <div class="col-lg-8 offset-lg-2">
                 <div class="full">
                    <form action="{{ url('/send_message') }}" method="POST">
                        @csrf
                       <fieldset>
                          <input type="text" placeholder="Enter your full name" name="name" required />
                          <input type="email" placeholder="Enter your email address" name="email" required />
                          <input type="text" placeholder="Enter subject" name="subject" required />
                          <textarea name="message" placeholder="Enter your message" required></textarea>
                          <input type="submit" value="Send">
                       </fieldset>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </section></body>
      <!-- end why section -->
      <!-- end why section -->
      <!-- arrival section -->

      <!-- end arrival section -->
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
