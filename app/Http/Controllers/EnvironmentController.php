<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnvironmentCreateRequest;
use App\Models\Environment;
use App\Serviсes\EnvironmentServices;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function create(EnvironmentCreateRequest $request, EnvironmentServices $services):Environment
    {
        return $services->create($request->environment_name, $request->project_id);
    }
}
