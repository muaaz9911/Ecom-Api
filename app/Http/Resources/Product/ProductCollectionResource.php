<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollectionResource extends Resource
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
            'Finalprice' => $this->price,
            'rating'   => $this->reviews->sum('star'),
            'Show product'=> route('products.show',$this->id),
            

        ];
    }
}
