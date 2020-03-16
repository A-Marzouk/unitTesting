<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $products  = [] ;

    protected $fillable = ['id'];

    public function products(){
        return $this->products;
    }


    public function totalCost(){
        $sum = 0 ;
        foreach ($this->products as $product){
            $sum += $product->cost;
        }

        return $sum;
    }

    public function add(Product $product){
        $this->products[] = $product ;
    }
}
