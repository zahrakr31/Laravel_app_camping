<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Book;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{


    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully.');
    }


    public function view_category()
    {

        $data=category::all();
        return view ('admin.category',compact('data'));
    }
    public function delete_category($id)
    {

       $data=category::find($id);
       $data->delete();


       return redirect()->back()->with('message','Category deleted successfully');

    }

    public function view_offer()
    {
        $category=category::all();
      return view ('admin.offer', compact('category'));
    }


   public function add_offer(Request $request)
   {

    $offer=new offer;

    $offer->title=$request->title;
    $offer->description=$request->description;
    $offer->destination=$request->destination;
    $offer->price=$request->price;
    $offer->number_seats=$request->number_seats;
    $offer->category=$request->category;
    $offer->discount_price=$request->dis_price;
    $offer->date=$request->date;

    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('offer',$imagename);
    $offer->image=$imagename;
    $offer->save();

    return redirect()->back()->with('message','Offer added successfully');

   }

   public function show_offer()
   {

     $offer=offer::all();
     return view('admin.show_offer',compact('offer'));
   }


   public function delete_offer($id)
   {

    $offer=offer::find($id);

    $offer->delete();

    return redirect()->back()->with('message','Offer deleted successfully');
   }


   public function update_offer($id)
   {

      $offer=offer::find($id);

      $category=category::all();
      return view('admin.update_offer',compact('offer','category'));
   }

   public function update_offer_confirm(Request $request, $id)
   {


        $offer=offer::find($id);
        $offer->title=$request->title;
        $offer->description=$request->description;
        $offer->destination=$request->destination;
        $offer->price=$request->price;
        $offer->number_seats=$request->number_seats;
        $offer->discount_price=$request->discount_price;
        $offer->category=$request->category;
        $offer->date=$request->date;


        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('offer', $imagename);

        $offer->image=$imagename;
        }




        $offer->save();

        return redirect()->back()->with('message','Offer updated successfully');

   }

   public function show_orders()
   {
    $book=book::all();
    return view('admin.show_orders',compact('book'));
   }
}
