<?php

namespace App\Http\Controllers;

use App\Http\Requests\MechanicCreateManualRequest;
use App\Http\Requests\MechanicCreateRequest;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Servises\MechanicServices;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function create(MechanicCreateRequest $request, MechanicServices $service)
    {
       $service->create($request->name);
       return response()->json(['message' => 'mechanic created']);

    }

    public function createManual(MechanicCreateManualRequest $request, MechanicServices $service):Mechanic
    {

        return $service->createManual($request->name);

    }
    public function getOwnerThroughCar(int $id, MechanicServices $service):Owner
    {
        return  $service->getOwnerThroughCar(Mechanic::find($id));
    }
}
