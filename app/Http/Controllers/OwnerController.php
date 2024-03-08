<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerCreateRequest;
use App\Models\Owner;
use App\Serviсes\OwnerServices;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function create (OwnerCreateRequest $request, OwnerServices $service): Owner
    {
        return $service->create($request->name, $request->car_id);
    }
}
