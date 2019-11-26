<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'name' => $this->name,
            'description' => $this->detail,
            'stock' => $this->stock,
            'price' => $this->price,
            'discount' => $this->discount,
            'rating'   => $this->reviews->sum('star'),
            'reviews'=> route('reviews.index',$this->id),
            

        ];

    }     
}