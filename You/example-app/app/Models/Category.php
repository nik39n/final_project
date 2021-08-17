<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    /**
     * Возвращает список товаров выбранной категории
     */
    public function getProducts() {
        return Product::where('category_id', $this->id)->get();
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}