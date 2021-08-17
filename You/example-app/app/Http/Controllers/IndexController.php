<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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
        return view('index');
    }
}
