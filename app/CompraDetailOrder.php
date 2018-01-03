<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CompraOrder;

class CompraDetailOrder extends Model
{
    public function compraOrder(){
    	return $this->belongsTo(CompraOrder::class);
    }
}
