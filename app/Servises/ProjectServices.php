<?php

namespace App\Servises;

use App\Models\Deployment;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectServices
{
    public function create(string $project_name):Project
    {
        $new_project = new Project();
        $new_project->name = $project_name;
        $new_project->save();

        return $new_project;
    }
    public function getDeploymentsThroughEnvironment(Project $project):Collection
    {
        return $project->projectDeployment;
    }
}
