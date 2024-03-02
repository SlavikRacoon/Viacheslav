<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeploymentCreateRequest;
use App\Models\Deployment;
use App\Servises\DeploymentServices;
use Illuminate\Http\Request;

class DeploymentController extends Controller
{
    public function create(DeploymentCreateRequest $request, DeploymentServices $services):Deployment
    {
        return $services->create($request->commit_hash, $request->environment_id);
    }
}
