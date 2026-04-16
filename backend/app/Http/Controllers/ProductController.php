<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with(['category', 'supplier'])->get();

        $products = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'sku' => $product->sku,
                'category' => $product->category,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'supplier' => $product->supplier,
                'createdAt' => $product->created_at,
                'updatedAt' => $product->updated_at,
            ];
        });

        return $products;
    }
}
