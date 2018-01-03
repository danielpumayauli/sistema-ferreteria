<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CompraDetailOrder;

class CompraOrder extends Model
{
    public function compraDetailOrders(){
		return $this->hasMany(CompraDetailOrder::class);
	}
}
