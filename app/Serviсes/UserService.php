<?php

namespace App\Serviсes;

use App\Models\Post;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserService
{
    public const PREFIX_FOR_PAYMENT = 'payment_method_';
    public function create(string $name, string $password, string $email, string $phone, string $avatar = null): User
    {
        try {
            DB::beginTransaction();
            $user = User::create([
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'telephone_number' => $phone,
        ]);

        if($avatar)
        {
            $service = app(ImageService::class);
            $service->create($avatar, $user);
        }

//        throw new \Exception('test exception');

        $role = Role::where('name', Role::DEFAULT_ROLE)->first();
        $user->roles()->attach($role);
        DB::commit();
        }catch (\Throwable $e){
            DB::rollBack();
            throw $e;
        }

        return $user->fresh();
    }
    public function getPosts(User $user): Collection
    {
        return $user->posts;
    }
    public function getLastPost(User $user): ?Post
    {
        return $user->lastPost;
    }
    public function getOldestPost(User $user): ?Post
    {
        return $user->oldestPost;
    }
    public function assingRole(User $user, Role $role)
    {
       $user->roles()->attach($role);
    }

    public function pay(string $currency, Product $product, User $user):string
    {
       return app(UserService::PREFIX_FOR_PAYMENT . strtoupper($currency))->pay($product, $user);
    }

}
