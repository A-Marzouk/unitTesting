<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','cost','order_id'];


    public function __construct(array $attributes = [])
    {
        // auto set the attributes and run the constructor before.
        parent::__construct($attributes);
    }

    public function name(){
        return $this->name;
    }

    public function cost(){
        return $this->cost;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
