<?php

namespace App\Strategies\PaymentStrategies;

use App\Models\Product;
use App\Models\User;

class UAHPaymentHandler implements PaymentHandlerInterface
{

    public function pay(Product $product, User $user):string
    {
        return 'UAH payment';
    }
}
