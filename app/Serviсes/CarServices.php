<?php

namespace App\Serviсes;

use App\Jobs\AddCarJob;
use App\Models\Car;

class CarServices
{
    public function create(string $model, int $mechanic_id): void
    {
        dispatch(new AddCarJob($model, $mechanic_id))->onQueue('cars');

    }

    public function createManual(string $model, int $mechanic_id): Car
    {
        $new_car = new Car();
        $new_car->model = $model;
        $new_car->mechanic_id = $mechanic_id;
        $new_car->save();

        return $new_car;
    }

    public function getCar(int $id): Car
    {
        $new_car = new Car();
        $new_car->id = $id;
        return $new_car;
    }
}
