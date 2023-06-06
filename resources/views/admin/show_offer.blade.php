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

            @if (session()->has('message'))
            <div class="alert alert-success">

                 {{ session()->get('message') }}
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
               </div>
            @endif

           <h2 class="font_size"> All Offers </h2>
             <table class="center">
                 <tr class="th_color">
                     <th class="th_deg">title</th>
                     <th class="th_deg">Description</th>
                     <th class="th_deg">Date</th>
                     <th class="th_deg">Destination</th>
                     <th class="th_deg">Number of seats available</th>
                     <th class="th_deg">Category</th>
                     <th class="th_deg">Price</th>
                     <th class="th_deg">Discount price</th>
                     <th class="th_deg">Image</th>
                     <th class="th_deg">Update</th>
                     <th class="th_deg">Delete</th>
                 </tr>
                 @foreach ($offer as $offer )


                 <tr>
                     <td>{{ $offer->title }}</td>
                     <td>{{ $offer->description }}</td>
                     <td>{{ $offer->date }}</td>
                     <td>{{ $offer->destination }}</td>
                     <td>{{ $offer->number_seats }}</td>
                     <td>{{ $offer->category }}</td>
                     <td>{{ $offer->price }}</td>
                     <td>{{ $offer->discount_price }}</td>
                     <td>

                        <img class="img_size" src="/offer/{{ $offer->image }}">
                     </td>
                     <td><a class="btn btn-success" onclick="return confirm('Are you sure you want to edit this offer?')" href="{{ url('/update_offer', $offer->id )}}">Update</a></td>
                     <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('/delete_offer', $offer->id)}}">Delete</a></td>
                 </tr>
                 @endforeach
             </table>
          </div>
      </div>
 @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
