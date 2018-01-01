<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
use App\Product;

class Category extends Model
{
    public function products(){
		return $this->hasMany(Product::class);
	}

	// Accesor Stock
	public function getStockAttribute()
	{
		$stock = Product::where('category_id', $this->id)
						->where('available', true)
						->sum('quantity');
		return $stock;
	}

	// Accesor Amount
	public function getAmountAttribute(){
		$amount = 0;
		$products = Product::where('category_id', $this->id)
							->where('available', 1)
							->get();
		
		// $products = DB::table('products')
  		//               ->where('category_id', $this->id)
  		//               ->get();

		foreach ($products as $product) {
			$amount += $product->price * $product->quantity;
		}

		//$result;
		return $amount;
	}

}
