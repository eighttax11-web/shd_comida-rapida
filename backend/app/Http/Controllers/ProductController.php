<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->product->index();
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        return $this->product->show($id);
    }
}
