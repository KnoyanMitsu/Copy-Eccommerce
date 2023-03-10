<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $users_id = auth()->user()->id;
        $cart_items = Cart::where('users_id', $users_id)->get();

        if ($cart_items->isEmpty()) {
            return redirect()->back()->withErrors(['Cart is empty']);
        }

        $total_price = 0;
        $order_items = [];
        foreach ($cart_items as $item) {
            $order_items[] = [
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price * $item->quantity,
            ];
            $total_price += $item->product->price * $item->quantity;
            $item->delete();
        }

        Order::create([
            'users_id' => $users_id,
            'order_items' => $order_items,
            'total_price' => $total_price,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function destroy(string $id)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
