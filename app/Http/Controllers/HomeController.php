<?php

namespace App\Http\Controllers;

use App\Models\Ambassador;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Offer;
use App\Models\Wishlist;
use App\Models\Book;
class HomeController extends Controller
{
   public function index()
   {

     $offer=Offer::paginate(5);
     return view('home.userpage',compact('offer'));

   }





    public function redirect()
    {
        $userrole=Auth::user()->userrole;
        if ($userrole=='1')
        {
            return view ('admin.home');

        }
        else {

            $offer=Offer::paginate(10);
     return view('home.userpage',compact('offer'));
        }
    }

    public function offer_detail($id)
    {

        $offer=offer::find($id);
        return view('home.offer_detail',compact('offer'));
    }


    public function add_wishlist(Request $request, $id)
    {

        if(auth::id())
        {

            $user=Auth::user();
            $offer=offer::find($id);
            $wishlist=new wishlist;
            $wishlist->name=$user->name;
            $wishlist->email=$user->email;
            $wishlist->phone=$user->Phone;
            $wishlist->address=$user->Address;
            $wishlist->user_id=$user->id;

            $wishlist->offer_title=$offer->title;

            if($offer->discount_price!=null)
            {
                 $wishlist->price=$offer->discount_price * $request->number_seats;
            }
            else
            {
                $wishlist->price=$offer->price * $request->number_seats;
            }


            $wishlist->image=$offer->image;
            $wishlist->offer_id=$offer->id;
            $wishlist->number_seats=$request->number_seats;

            $wishlist->save();

            return redirect()->back();

        }
        else
        {
            return redirect('login');
        }

    }


    public function show_wishlist()
    {
       if (Auth::id())
       {
        $id=Auth::user()->id;
        $wishlist=wishlist::where('user_id','=',$id)->get();

         return view('home.showwishlist',compact('wishlist'));
       }
       else
       {
           return view ('login');
       }

    }

    public function remove_wishlist($id)
    {
        $wishlist=Wishlist::find($id);

        $wishlist->delete();

        return redirect()->back();

    }

   public function cash_book()
   {
      $user=Auth::user();
      $userid=$user->id;

      $data=wishlist::where('user_id','=',$userid)->get();
      foreach($data as $data)
      {

        $book=new book;
        $book->name=$data->name;
        $book->email=$data->email;
        $book->phone=$data->phone;
        $book->address=$data->address;
        $book->user_id=$data->user_id;
        $book->offer_title=$data->offer_title;
        $book->price=$data->price;
        $book->number_seats=$data->number_seats;
        $book->image=$data->image;
        $book->offer_id=$data->offer_id;
        $book->payment_status='cash at the agency';
        $book->booking_status='processing';

        $book->save();
        $wishlist_id=$data->id;
        $wishlist=wishlist::find($wishlist_id);
        $wishlist->delete();
      }
      return redirect()->back()->with('message','We have Received your booking order. We will connect with you soon ');

   }

     public function contact()
     {
         return view ('home.contact');
     }
   public function send_message(Request $request)
   {
    $ambassador= new Ambassador;
    $ambassador->name=$request->name;
    $ambassador->email=$request->email;
    $ambassador->subject=$request->subject;
    $ambassador->message=$request->message;
    $ambassador->save();
    return redirect()->back()->with('message','Your Message was sent successfully');

   }
   public function about()
   {
       return view('home.about');}
       public function testimonial()
       {
           return view('home.testimonial');}

}
