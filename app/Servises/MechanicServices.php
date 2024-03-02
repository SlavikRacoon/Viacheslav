<?php

namespace App\Servises;

use App\Jobs\CreateMechanicJob;
use App\Models\Mechanic;
use App\Models\Owner;

class MechanicServices
{
    public function create(string $name):void
    {
        dispatch(new CreateMechanicJob($name))->onQueue('Mechanic');
//        $new_mechanic = new Mechanic();
//        $new_mechanic->name = $name;
//        $new_mechanic->save();
//
//        return $new_mechanic;
    }

    public function getOwnerThroughCar(Mechanic $mechanic): Owner
    {
//        return $mechanic->carOwner()->first();
        return $mechanic->carOwner;
    }
}
