<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Models\PreOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $category = $request->category;
        $location = $request->location;
        $search = $request->search;

        if ($category && $location && $search){
            $products = Product::where('category', $category)
                ->where('location', $location)
                ->where('name', 'like', "%$search %")
                ->paginate(10);
        } elseif ($category && $location){
            $products = Product::where('category', $category)
                ->where('location', $location)
                ->paginate(10);
        } elseif ($category && $search){
            $products = Product::where('category', $category)
                ->where('name', 'like', "%$search %")
                ->paginate(10);
        } elseif ($location && $search){
            $products = Product::where('location', $location)
                ->where('name', 'like', "%$search %")
                ->paginate(10);
        } elseif ($category){
            $products = Product::where('category', $category)
                ->paginate(10);
        } elseif ($location){
            $products = Product::where('location', $location)
                ->paginate(10);
        } elseif ($search){
            $products = Product::where('name', 'like', "%$search %")
                ->paginate(10);
        } else {
            $products = Product::paginate(10);
        }
        return view('home', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('detail', compact('product'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'product_id' => 'required',
        ]);

        $data['status'] = 'WAITING';
        $data['user_id'] = auth()->user()->id;
        
        $preOrder = PreOrder::create($data);

        return redirect()->route('home')->with('status', 'Berhasil');
    }

    public function payment(Request $request, $id){
        return view('payment', compact('id'));
    }

    public function paymentStore(Request $request, $id){
        $data = $request->validate([
            'bank' => 'required',
        ]);

        $order = Order::find($id);
        $order->bank = $data['bank'];
        $order->status = 'SUCCESS';

        $preOrder = PreOrder::find($order->pre_order_id);
        $preOrder->status = 'SUCCESS';
        
        $preOrder->save();
        $order->save();
        return redirect()->route('done')->with('status', 'Berhasil');
    }

    public function user(Request $request){
        $user = User::find(auth()->user()->id);

        return view('user', compact('user'));
    }

    public function updateUser(Request $request){
        $user = User::find(auth()->user()->id);

        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->save();
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->route('user')->with('status', 'Berhasil');
    }
}
