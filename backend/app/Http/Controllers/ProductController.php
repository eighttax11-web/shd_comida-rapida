<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);

        if (is_object($product)) {
            return response()->json($product);
        }

        return response()->json('Product not found', 404);
    }
}
