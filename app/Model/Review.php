<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Review extends Model
{
    //

    
public function product(){

    return $this->belongsTo(Product::class);
}
}
