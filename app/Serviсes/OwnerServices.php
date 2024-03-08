<?php

namespace App\Serviсes;

use App\Models\Owner;

class OwnerServices
{
    public function create(string $owner_name, int $car_id): Owner
    {
        $new_owner = new Owner();
        $new_owner->name = $owner_name;
        $new_owner->car_id = $car_id;
        $new_owner->save();

        return $new_owner;
    }
}
