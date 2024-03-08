<?php

namespace App\Strategies\PaymentStrategies;

use App\Models\Product;
use App\Models\User;

class USDPaymentHandler implements PaymentHandlerInterface
{

    public function pay(Product $product, User $user):string
    {
        return 'USD payment';
    }
}
