<?php


namespace App\Repositories;

use App\Models\Product;

class ProductRepository
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
