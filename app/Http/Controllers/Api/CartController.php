<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use App\Http\Traits\AuthenticationTrait;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    use AuthenticationTrait;

    public function show_cart_items(Request $request)
    {
        $valid_customer = $this->validateConnection($request);
        if(!$valid_customer)
            return response()->json(['status'=>'error','message'=>'Invalid Connection','data'=>[]]);
        
        $valid_auth = $this->validateAuth($request->connection_id,$request->auth_code);
        if(!$valid_auth)
            return response()->json(['status'=>'error','message'=>'Unauthenticated!','data'=>[]]);

        $cart_items = CartItem::where('customer_id', $request->customer_id)->get();
        return response()->json([
            "status" => "success",
            "data" => [
                "cart_items" => $cart_items
            ]
        ]);
    }

    public function addToCart(Request $request)
    {

        $valid_customer = $this->validateConnection($request);
        if(!$valid_customer)
            return response()->json(['status'=>'error','message'=>'Invalid Connection','data'=>[]]);
        
        $valid_auth = $this->validateAuth($request->connection_id,$request->auth_code);
        if(!$valid_auth)
            return response()->json(['status'=>'error','message'=>'Unauthenticated!','data'=>[]]);

        $product = Product::find($request->product_id);

        DB::table('cart_items')->insert([
            'customer_id' => $valid_customer->customer_id,
            'product_name' => $product->name,
            'quantity' => $request->quantity,
            'price' => $product->price,
            'product_id' => $product->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Item added to cart successfully']);
    }

}
