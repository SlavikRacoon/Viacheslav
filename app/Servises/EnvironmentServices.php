<?php

namespace App\Servises;

use App\Models\Environment;

class EnvironmentServices
{
    public function create(string $environment_name, int $project_id):Environment
    {
        $new_environment = new Environment();
        $new_environment->name = $environment_name;
        $new_environment->project_id = $project_id;
        $new_environment->save();

        return $new_environment;
    }
}
