<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class CatalogController extends Controller {


    public function countB(){
        $orderId = session('orderId');
        $order = Order::findOrFail($orderId);
        $count = $order->products->count();
        return $count;
    }

    public function index() {
        $roots = Category::where('parent_id', 0)->get();

        return view('catalog.allcategory', compact('roots'));
    }
    public function allbrand() {
        $brands = Brand::get();

        return view('catalog.allbrands', compact('brands'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('catalog.category', compact('category'));
    }

    public function brand($slug) {
        $brand = Brand::where('slug', $slug)->firstOrFail();

        return view('catalog.brand', compact('brand'));
    }

    public function product($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('catalog.product', compact('product'));
    }
    public function allprod(){
        $allproduct = Product::get();
        return view ('catalog.index', compact('allproduct'));
    }
}