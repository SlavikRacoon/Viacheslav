<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarCreateRequest;
use App\Models\Car;
use App\Servises\CarServices;


class CarController extends Controller
{
    public function create (CarCreateRequest $request, CarServices $service)
    {
        $service->create($request->model, $request->mechanic_id);
        return response()->json(['message' => 'car model added']);
    }

    public function getCar(int $id):Car
    {
        return Car::find($id);
    }
}
