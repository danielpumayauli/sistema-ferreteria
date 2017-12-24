<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 4)->create();
        $categories->each(function($c){
        	$products = factory(Product::class, 5)->make();
        	$c->products()->saveMany($products);
        });
        
        
    }
}
