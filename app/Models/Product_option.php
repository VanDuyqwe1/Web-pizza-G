<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_option extends Model
{
    use HasFactory;
    
    protected $table='product_option';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function option()
    {
        return $this->belongsTo(Option::class, 'option_id');
    }

}
