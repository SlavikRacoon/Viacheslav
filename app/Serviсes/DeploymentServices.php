<?php

namespace App\Serviсes;

use App\Models\Deployment;

class DeploymentServices
{
    public function create(string $commit_hash, int $environment_id):Deployment
    {
        $new_deployment = new Deployment();
        $new_deployment->commit_hash = $commit_hash;
        $new_deployment->environment_id = $environment_id;
        $new_deployment->save();

        return $new_deployment;
    }
}
