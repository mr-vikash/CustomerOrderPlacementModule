<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\AuthenticationTrait;
use App\Models\Order;
use App\Models\PaymentMethod;


class CustomerController extends Controller
{
    use AuthenticationTrait;

    public function place_order(Request $request)
    {
        $valid = $this->validateConnection($request);
        if(!$valid)
            return response()->json(['status'=>'error','message'=>'Invalid Connection','data'=>[]]);

        $valid_auth = $this->validateAuth($request->connection_id,$request->auth_code);
        if(!$valid_auth)
            return response()->json(['status'=>'error','message'=>'Unauthenticated!','data'=>[]]);

        $payment_method = PaymentMethod::where('method_name', $request->payment_type)->first();

        if(!$payment_method)
        {
            return response()->json([
                "status" => "failed",
                "error" => "Please select valid payment type"
            ]);
        }

        try {
            $order = Order::create([
                'product_name' => $request->product_name,
                'customer_id' => $valid->customer_id,
                'price' => $request->price,
                'payment_method_id' => $payment_method->id,
                'status' => $request->status ?? 'pending',
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Order placed successfully",
                "data" => [
                    "Product Name" => $order->product_name,
                    "Order Status" => $order->status,
                    "Price" => $order->price
                ]
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'error' => 'Order creation failed',
                'message' => $e->getMessage()
            ], 500);
        }
        

    }
}
