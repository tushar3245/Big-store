<?php
namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\Contracts\View\View;
use App\category;

class mainManuComposer
{
 

  public function compose(View $view) {
      $categories = category::where('status', 1)->get();
    $view->with('categories', $categories);
    
  }

}
