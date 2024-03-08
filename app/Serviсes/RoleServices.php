<?php

namespace App\Serviсes;

use App\Models\Role;

class RoleServices
{
    public function addRole(string $roleName):Role
    {
        return Role::create(['name' => $roleName]);
    }
}
