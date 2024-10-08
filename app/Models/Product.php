<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['product_id', 'name', 'desc', 'price', 'stock'];
    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'product_id');
    }
}
