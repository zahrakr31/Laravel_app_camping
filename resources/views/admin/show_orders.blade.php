<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')
     <style type="text/css">
      .center
      {
          margin: auto;
          width: 50%;
          border: 2px solid white;
          text-align: center;
          margin-top: 40px;
      }
      .font_size
      {
          text-align: center;
          font-size: 40px;
          padding-top: 20px;
      }
     .img_size
     {
         width: 150px;
         height: 150px;

     }
     .th_color
     {
         background-color: palevioletred;
     }
    .th_deg
    {
     padding: 20px;
    }



    </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')

 @include('admin.header')

      <div class="main-panel">
          <div class="content-wrapper">



           <h2 class="font_size"> All Booking Orders </h2>
             <table class="center">
                 <tr class="th_color">
                     <th class="th_deg">Name</th>
                     <th class="th_deg">Email</th>
                     <th class="th_deg">Date</th>
                     <th class="th_deg">phone</th>
                     <th class="th_deg">Address</th>
                     <th class="th_deg">User ID</th>
                     <th class="th_deg">Offer title</th>
                     <th class="th_deg">Number of persons</th>
                     <th class="th_deg">Price</th>
                     <th class="th_deg">Offer ID</th>
                     <th class="th_deg">Payment Status</th>
                     <th class="th_deg">Booking Status</th>
                 </tr>
                 @foreach ($book as $book )


                 <tr>
                     <td>{{ $book->name }}</td>
                     <td>{{ $book->email }}</td>
                     <td>{{ $book->date }}</td>
                     <td>{{ $book->phone }}</td>
                     <td>{{ $book->address }}</td>
                     <td>{{ $book->user_id }}</td>
                     <td>{{ $book->offer_title }}</td>
                     <td>{{ $book->number_seats }}</td>
                     <td>{{ $book->price }}</td>
                     <td>{{ $book->offer_id }}</td>
                     <td>{{ $book->payment_status }}</td>
                     <td>{{ $book->booking_status }}</td>
                 </tr>
                 @endforeach
             </table>
          </div>
      </div>
 @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
