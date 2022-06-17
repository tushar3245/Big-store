<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
class product extends Model
{

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
        //return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }
}
