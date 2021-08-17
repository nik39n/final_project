<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model {
    use HasFactory;

    /**
     * Возвращает категорию выбранного товара
     */
    public function getCategory() {
        return Category::find($this->category_id);
    }

    protected $fillable = ['category_id', 'brand_id','name', 'content', 'slug', 'image', 'price'];
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
    public function getPriceForCount(){
        if (!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}