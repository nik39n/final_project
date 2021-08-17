<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    /**
     * Возвращает категорию выбранного товара
     */
    public function getCategory() {
        return Category::find($this->category_id);
    }
    /**
     * Возвращает бренд выбранного товара
     */
    public function getBrand() {
        return Brand::find($this->brand_id);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function baskets(){
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}