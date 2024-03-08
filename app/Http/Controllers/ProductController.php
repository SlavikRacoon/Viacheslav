<?php

namespace App\Http\Controllers;

use App\Serviсes\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request, ProductService $service)
    {
        return $service->create($request->name, $request->description, $request->price);
    }
}
