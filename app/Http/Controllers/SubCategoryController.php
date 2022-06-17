<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\SubCategory;

class SubCategoryController extends Controller
{
    //
    public function index(){

        $subcategories   = SubCategory::with('category')->get();

        return view('backend.subCategory.index',compact('subcategories'));
    }
  
    
    public function addNew(){

        $categories   = category::where('status',1)->get();
        
        return view('backend.subCategory.add-new',compact('categories'));
    }




   
    public function Stor(Request $request){
        {

            $request->validate([
            'name'=>"required",
            'status'=>"required",
            'category'=>"required"
            ]);
            
               $subcategory                      =          new SubCategory();
               $subcategory->name                =           $request->name;
               $subcategory->status              =           $request->status;
               $subcategory->category_id         =           $request->category;
               $result                           =           $subcategory->save();
               
            
                if ($result){
                            return back()->with('success_message','category inserted successfully');
                }else{
                    return back()->with('error_message','category inserted unsuccessfully');
                }
            
            
            }
            
      
    }

    public function Edit ($id){
        $subcategory= SubCategory::findorfail($id);
        $categories   = category::where('status',1)->get();
    
        return view('backend.subcategory.edit',compact('subcategory', 'categories' ));
    
    
    }




    public function Update(Request $request)
    {
        $request->validate([
            'name'=>"required",
            'status'=>"required"
            ]);
    
            $subcategory= SubCategory::findorfail($request->id);
            $subcategory->name           =           $request->name;
            $subcategory->status         =           $request->status;
            $subcategory->category_id      =           $request->category;
            $result                      =           $subcategory->save();
          
            
            if ($result){
                return back()->with('success_message','Subcategory updated successfully');
    }else{
        return back()->with('error_message','Subcategory updated unsuccessfully');
    }
    
    
    
    }



    public function delete($id)
    {
       
            $result= SubCategory::where('id',$id)->delete();
        
            
            if ($result){
                return back()->with('success_message','subcategory deleted successfully');
    }else{
        return back()->with('error_message','subcategory deleted unsuccessfully');
    }
    
    }




}
