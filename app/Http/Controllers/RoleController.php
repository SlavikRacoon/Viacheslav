<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleCreateRequest;
use App\Models\Role;
use App\Servises\RoleServices;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole(RoleCreateRequest $request, RoleServices $roleServices):Role
    {
        return $roleServices->addRole($request->roleName);
    }
}
