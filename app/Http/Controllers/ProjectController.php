<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Models\Deployment;
use App\Models\Project;
use App\Serviсes\ProjectServices;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(ProjectCreateRequest $request, ProjectServices $services):Project
    {
        return $services->create($request->project_name);
    }

    public function getDeploymentsThroughEnvironment(int $id, ProjectServices $services):Collection
    {
        return $services->getDeploymentsThroughEnvironment(Project::find($id));
    }
}
