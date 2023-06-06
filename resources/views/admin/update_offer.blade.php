<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
     @include('admin.css')



     <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .center
       {
           margin : auto;
           width: 50%;
           text-align: center;
           margin-top: 30%;
           border: 3px solid pink;
       }

       .font_size
       {
         font-size: 40px;
         padding-bottom: 40px;
       }
       .input_color
       {
           color: black;
       }

       .text_color
       {
           color: black;
           padding-bottom: 20px;
       }
       label
       {
           display: inline-block;
           width: 200px;
       }
       .div_design
       {
           padding-bottom: 15px;
       }

    </style>
  </head>
  <body>
<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

         @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                    @if (session()->has('message'))
                    <div class="alert alert-success">

                         {{ session()->get('message') }}
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                       </div>
                    @endif


              <div class="div_center">
                 <h1 class="font_size"> Update Offer</h1>
                 <form action="{{ url('/update_offer_confirm',$offer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div clas="div_design">
                     <label>Offer Title : </label>
                     <input class="text_color" type="text" name="title" placeholder="Write a title"  value="{{ $offer->title }}">
                 </div>
                  <div clas="div_design">
                     <label>Description : </label>
                     <input class="text_color" type="text" name="description" placeholder="Write a description"  value="{{ $offer->description }}">
                 </div>
                 <div clas="div_design">
                    <label>Destination : </label>
                    <input class="text_color" type="text" name="destination" placeholder="Write a destination"  value="{{ $offer->destination }}">
                </div>


                  <div clas="div_design">
                      <label>Price : </label>
                      <input class="text_color" type="number" name="price" placeholder="Write a price"  value="{{ $offer->price}}">
                  </div>


                   <div clas="div_design">
                     <label> Number of seats available : </label>
                     <input class="text_color" type="number" name="number_seats" placeholder="Write the number of seats available"  value="{{ $offer->number_seats }}">
                   </div>


                    <div clas="div_design">
                      <label>Discount price : </label>
                      <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price"  value="{{ $offer->discount_price }}" >
                   </div>

                   <div clas="div_design">
                     <label>Offer Category : </label>
                       <select class="text_color" name="category"   >
                        <option value="" selected="">{{ $offer->category }}</option>

                        @foreach($category as $category)
                        <option value="{{ $category->category_name}}">{{ $category->category_name }}</option>
                        @endforeach

                         </select>
                   </div>

                   <div clas="div_design">
                      <label>Date : </label>
                      <input  class ="text_color" type="date" name="date"  value="{{ $offer->date }}">
                    </div>

                    <div clas="div_design">
                        <label>Current Image here : </label>
                        <img style="margin:auto;" height="100" width="100" src="/offer/{{ $offer->image }}">
                    </div>
                   <div clas="div_design">
                      <label>Change Image here : </label>
                      <input class ="text_color" type="file" name="image" placeholder="Image.jpg" >
                  </div>
                    <input type="submit" value="Update Offer" class="btn btn-success">
              </div>
            </form>



            </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
