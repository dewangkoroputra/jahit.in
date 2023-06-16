<?php

namespace App\Http\Controllers\Cart;

use App\Models\Order;
use App\Models\PreOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;

        $products = PreOrder::where('user_id', $user_id)->where('status', 'WAITING')->with('product')->get();
        $harga_total = 0;
        foreach ($products as $product){
            $harga_total = $harga_total + $product->product->price;
        }
        return view('shopping-cart', compact('products', 'harga_total'));
    }

    public function preOrderDelete($id){
        $preOrder = PreOrder::find($id);
        $preOrder->delete();

        return redirect()->route('cart');
    }

    public function order(){
        $user_id = auth()->user()->id;

        $products = PreOrder::where('user_id', $user_id)->with('product')->get();
        $get_order = Order::where('pre_order_id', $products[0]->id)->get();
        if (count($get_order) > 0){
            return redirect()->route('payment', $get_order[0]->id);
        }
        foreach ($products as $product){
            $data = [
                'user_id' => $user_id,
                'product_id' => $product->product_id,
                'pre_order_id' => $product->id,
            ];
            $order = Order::create($data);
        }
        $product->status = 'PROCESS';
        $product->save();

        return redirect()->route('payment', $order->id);


    }
}
