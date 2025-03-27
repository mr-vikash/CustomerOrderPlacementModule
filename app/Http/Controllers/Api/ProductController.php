<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Traits\AuthenticationTrait;

class ProductController extends Controller
{
    use AuthenticationTrait;

    public function listProducts(Request $request)
    {
        $valid_customer = $this->validateConnection($request);
        if(!$valid_customer)
            return response()->json(['status'=>'error','message'=>'Invalid Connection','data'=>[]]);
        
        $valid_auth = $this->validateAuth($request->connection_id,$request->auth_code);
        if(!$valid_auth)
            return response()->json(['status'=>'error','message'=>'Unauthenticated!','data'=>[]]);

        $products = Product::all();
        return response()->json($products);
    }

    public function getProductDetail(Request $request)
    {
        $valid_customer = $this->validateConnection($request);
        if(!$valid_customer)
            return response()->json(['status'=>'error','message'=>'Invalid Connection','data'=>[]]);
        
        $valid_auth = $this->validateAuth($request->connection_id,$request->auth_code);
        if(!$valid_auth)
            return response()->json(['status'=>'error','message'=>'Unauthenticated!','data'=>[]]);
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }
}
