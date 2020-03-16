<?php

namespace Tests\Unit;

use App\Order;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    protected $order;
    protected $products = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->order  = new Order;
        $this->products[]   = new Product(['name' => 'product 1 ', 'cost' => 50]);
        $this->products[]   = new Product(['name' => 'product 2 ', 'cost' => 75]);
    }

    /** @test */
    public function an_order_consists_of_products(){

        foreach ($this->products as $product){
            $this->order->add($product);
        }

        $this->assertCount(2,$this->order->products());

    }


    /** @test */
    public function an_order_can_determine_total_cost_of_all_products(){
        foreach ($this->products as $product){
            $this->order->add($product);
        }

        $this->assertEquals(125, $this->order->totalCost());
    }

}
