<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\product;


class CartController extends Controller
{

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        //  dd($cartItems);
       return view('frontend.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {

       // dd($request->all());
       
       $product=product::find($request->product_id);
       $price=$product->discounted_price;
       if  ($product->discounted_price==0){
        $price=$product->price;
       }

       $result= \Cart::add([
            'id' => $request->product_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
           
        ]);
       
        if ($result){
            return back()->with('success_message','product add to cart successfully');
        }else{
        return back()->with('error_message','product added unsuccessfully');
        }


}




public function removeCart($id)
{
    $result=\Cart::remove($id);
    if ($result){
        return back()->with('success_message','product remove successfully');
    }else{
    return back()->with('error_message','product added unsuccessfully');
    }
}


public function updateCart(Request $request)
{
    $result= \Cart::update(
        $request->id,
        [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ],
        ]
    );
    if ($result){
        return back()->with('success_message','cart updated successfully');
    }else{
    return back()->with('error_message','cart updated unsuccessfully');
    }

}
}
