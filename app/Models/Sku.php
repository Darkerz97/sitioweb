<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    protected $table = 'sku';

    protected $fillable = [
        'product_id', 'code', 'barcode', 'lang', 'card_condition',
        'is_foil', 'is_promo', 'last_cost', 'tax_rate', 'is_active'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
