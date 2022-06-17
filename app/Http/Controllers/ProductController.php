<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\SubCategory;
use App\product;

class ProductController extends Controller
{
    //


    public function index(){
        $products= product::where('status',1)->get();
        return view ('backend.product.index',compact('products'));

    }

    public function addNew(){
$categories=Category ::where('status',1)->get();
        return view ('backend.product.add-new',compact('categories'));
    }


    public function getSubcategory(Request $request){
    $subcategories=SubCategory::where('category_id',$request ->category_id)->where('status',1) ->get();
        return response()->json($subcategories);

}



public function Store (Request $request){
    $image_name='';
    if($request->hasfile('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('uploads'), $filename);
      $image_name='uploads/'.$filename;
     

}

$product                         = new product();
$product->name                   =$request->name;
$product->category_id            =$request->category;
$product->sub_category_id        =$request->sub_category;
$product->price                  =$request->price;
$product->discounted_price       =$request->discounted_price;
$product->image                  =$image_name;
$product->is_featured            =$request->is_featured;
$product->status                 =$request->status;
$product->description            =$request->description;
$result                          =$product->save();


if ($result){
    return back()->with('success_message','product added successfully');
}else{
return back()->with('error_message','product added unsuccessfully');
}
}

public function edit($id){
    $product=product::findorfail($id);
    $categories=Category ::where('status',1)->get();
    $sub_categories=Subcategory::where('category_id',$product->category_id)->where('status',1)->get();
            return view ('backend.product.edit',compact('categories','product' ,'sub_categories'));
        }


public function update(Request $request){

$product=product::findorfail($request->id);
$image_name='';

if($request->hasfile('image')){
    unlink($product->image );
  
    
    

    $file= $request->file('image');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(public_path('uploads'), $filename);
  $image_name='uploads/'.$filename;
 
}

$product->name            =$request->name;
$product->category_id        =$request->category;
$product->sub_category_id    =$request->sub_category;
$product->price           =$request->price;
$product->discounted_price=$request->discounted_price;

if($image_name !=''){
    $product->image=$image_name;
}


$product->status          =$request->status;
$product->description     =$request->description;
$result                   =$product->save();



if ($result){
    return back()->with('success_message','product update successfully');
}else{
return back()->with('error_message','product update unsuccessfully');
}


}



public function delete($id){

$product = product::findorfail($id);
if( file_exists('$product->image') )
{
    unlink('$product->image');
}
    $result=$product->delete();

if ($result){
    return back()->with('success_message','product deleted successfully');
}else{
return back()->with('error_message','product deleted unsuccessfully');
}
}
}
