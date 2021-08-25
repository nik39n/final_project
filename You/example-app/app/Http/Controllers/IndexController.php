<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;



class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request){
            // $orderId = session('orderId');
            // $order = Order::findOrFail($orderId);
            // $countBasket = $order->products->count();
        $category = Category::limit(3)->get();
        $allproduct = Product::where('hit',1)->limit(3)->get();
        $allbrand = Brand::limit(6)->get();
        return view('index',compact('allproduct','category','allbrand'));
    }
}
