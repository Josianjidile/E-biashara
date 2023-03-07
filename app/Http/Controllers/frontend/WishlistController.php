<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist',compact('wishlist'));
    }

    public function add(Request $request)

    {
        if(Auth::check())
        {
            $prod_id = $request->input('product_id');
            if(Product::find($prod_id))
            {
         $wish = new Wishlist();
         $wish->prod_id =$prod_id;
         $wish->user_id =Auth::id();
         $wish->save();

         return response()->json(['status'=>"Product Added to wishlist"]);
            }
            else{
                return response()->json(['status'=>"Product does'nt exist"]);
            }
        }
        else
        {
            return response()->json(['status'=>"login to continue"]);
        }
    }

    public function deleteitem(Request $request)
    {

        if(Auth::check())
        {
        $prod_id=$request->input('prod_id');
        if(Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
        {
            $wish=Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
            $wish->delete();
            return response()->json(['status'=>"Item Removed from wishlist"]);
        }
    
        }
    
        else
    
    {
        return response()->json(['status'=>"login to continue"]);
    }
    
    }

    public function wishlistcount(Request $request)
    {
        $wishcount=Wishlist::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$wishcount]);
    }
}
