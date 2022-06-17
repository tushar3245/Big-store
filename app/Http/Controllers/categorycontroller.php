<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;
class categorycontroller extends Controller
{
    public function index(){

        $categories   = category::all();

        return view('backend.category.index',compact('categories'));
    }


    public function addNew(){
        return view('backend.category.add-new');
    }




    public function Stor(Request $request)
    {

$request->validate([
'name'=>"required",
'status'=>"required"
]);

   $category                 =          new Category();
   $category->name           =           $request->name;
   $category->status         =           $request->status;
   $result                   =           $category->save();
   

    if ($result){
                return back()->with('success_message','category inserted successfully');
    }else{
        return back()->with('error_message','category inserted unsuccessfully');
    }


}

public function Edit ($id){
    $category= Category::findorfail($id);
   

    return view('backend.category.edit',compact('category'));


}

public function Update(Request $request)
{
    $request->validate([
        'name'=>"required",
        'status'=>"required"
        ]);

        $category= Category::findorfail($request->id);
        $category->name           =           $request->name;
        $category->status         =           $request->status;
        $result                   =           $category->save();
      
        
        if ($result){
            return back()->with('success_message','category updated successfully');
}else{
    return back()->with('error_message','category updated unsuccessfully');
}



}

public function delete($id)
{
   
        $result= Category::destroy($id);
    
        
        if ($result){
            return back()->with('success_message','category deleted successfully');
}else{
    return back()->with('error_message','category deleted unsuccessfully');
}

}
}
