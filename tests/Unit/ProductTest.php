<?php

namespace Tests\Unit;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    protected $product;

  protected function setUp(): void
  {
      parent::setUp();
      $this->product = new Product(['name' => 'new product','cost' => 50]);
  }


    /** @test */
    public function a_product_has_a_name(){
        $this->assertEquals('new product', $this->product->name());
    }

    /** @test */
    public function a_product_has_a_cost(){
        $this->assertEquals(50, $this->product->cost());
    }

}
