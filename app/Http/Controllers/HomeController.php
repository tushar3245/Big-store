<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\subcategory;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $featured_products = product::where('is_featured',1) ->where('status',1)->limit('4')->get();
        $latest_products = product::where('status',1)->limit('8')->get();
        return view('frontend.home' ,compact('featured_products','latest_products'));
       
      
    }

public function productDetailes($id){
$product=product::find($id);
$releted_product=product::where('category_id',$product->category_id)->where('id','!=', $id)->limit('8')->get();

return view('frontend.partials.detials' ,compact('product','releted_product'));
}

public function categoryWiseProduct  ($id){

    $subcategory=subcategory::findorfail($id);

    $product=product::where('sub_category_id',$id)->where('status',1)->orderBy('id', 'DESC')->limit('12')->get();

return view('frontend.category-wise-product',compact('product','subcategory'));


}


//shoping cart ar
public function checkout(){
    if (Auth::check() && @Auth::user()-> type == 'customer'){
        $cartItems = \Cart::getContent();
        return view ('frontend.checkout', compact('cartItems'));
    }else{
        return redirect('user-login');
    }
   

}



public function wishlist(){


$products          =  product::where('is_featured',1) ->where('status',1)->limit('4')->get();


    return view ('frontend.wishlist',compact('products'));
}



}

