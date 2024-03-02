<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Servises\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Ramsey\Collection\Collection;

class UserController extends Controller
{
    public function create(UserCreateRequest $request, UserService $service):User
    {
        return $service->create($request->name, $request->password, $request->email, $request->avatar);
    }
    public function getUser(int $user_id):User
    {
        return User::find($user_id);
    }
    public function getPostsByUser(int $user_id, UserService $service): \Illuminate\Support\Collection
    {
        $user = User::find($user_id);

        return $service->getPosts($user);
    }
    public function getLastsPost(int $user_id, UserService $service):Post
    {
        $user = User::find($user_id);

        return $service->getLastPost($user);
    }
    public function getOldestPost(int $user_id, UserService $service):Post
    {
        $user = User::find($user_id);

        return $service->getOldestPost($user);
    }
    public function assingRole(int $user_id, int $role_id, UserService $service):JsonResponse
    {
        $user = User::find($user_id);
        $role = Role::find($role_id);

        $service->assingRole($user, $role );

        return response()->json(['message' => 'role assigned']);
    }
}
