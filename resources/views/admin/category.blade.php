<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')

     <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
       .h2_font
       {
         font-size: 40px;
         padding-bottom: 40px;
       }
       .input_color
       {
           color: black;
       }

       .center
       {
           margin : auto;
           width: 50%;
           text-align: center;
           margin-top: 30%;
           border: 3px solid pink;
       }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

         @include('admin.header')
        <div class="main-panel">



               @if (session()->has('messgae'))
               <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}

                  </div>
               @endif
                  <div class="div_center">

                     <form action="{{ url('/add_category') }}" method="POST">
                     @csrf

                      <input class="input_color" type="text" name="category" placeholder="Write category name">
                      <input type="submit" class="btn btn-primary" name="Submit" value="Add Category" >
                     </form>
                   </div>


                  <table class="center">

                    <tr>

                       <td>Category name</td>
                       <td>Action</td>

                    </tr>
                    <tr>
                    @foreach ($data as $data)
                     <td>{{ $data->category_name }}</td>
                     <td>
                         <a onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger" href="{{ url('delete_category', $data->id) }}">Delete</a> </td>

                  </tr>
                  @endforeach
             </table>






             </div>
       </div>



    </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
