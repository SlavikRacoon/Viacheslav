<?php

namespace App\Serviсes;

use App\Models\Product;
use http\Env\Request;

class ProductService
{
    public function create(string $name, string $description, int $price): Product
    {
        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
        ]);
        return $product;
    }
}
