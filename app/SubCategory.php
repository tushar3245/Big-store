<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;

class SubCategory extends Model
{
    //


    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

}
