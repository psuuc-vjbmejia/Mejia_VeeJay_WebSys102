<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer(Request $request)
    {
        return view('Customer', [
            'customer_id' => $request->query('customer_id'),
            'name' => $request->query('name'),
            'address' => $request->query('address'),
        ]);
    }

    public function item(Request $request)
    {
        return view('Item', [
            'item_no' => $request->query('item_no'),
            'name' => $request->query('name'),
            'price' => $request->query('price'),
        ]);
    }

    public function order(Request $request)
    {
        return view('Order', [
            'customer_id' => $request->query('customer_id'),
            'name' => $request->query('name'),
            'order_no' => $request->query('order_no'),
            'date' => $request->query('date'),
        ]);
    }

    public function orderDetails(Request $request)
    {
        return view('OrderDetails', [
            'trans_no' => $request->query('trans_no'),
            'order_no' => $request->query('order_no'),
            'item_id' => $request->query('item_id'),
            'name' => $request->query('name'),
            'price' => $request->query('price'),
            'qty' => $request->query('qty'),
        ]);
    }
}
