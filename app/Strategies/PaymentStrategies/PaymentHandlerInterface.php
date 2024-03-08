<?php

namespace App\Strategies\PaymentStrategies;

use App\Models\Product;
use App\Models\User;

interface PaymentHandlerInterface
{
    public function pay(Product $product, User $user):string;
}
