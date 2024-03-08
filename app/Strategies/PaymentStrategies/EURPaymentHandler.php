<?php

namespace App\Strategies\PaymentStrategies;

use App\Models\Product;
use App\Models\User;

class EURPaymentHandler implements PaymentHandlerInterface
{

    public function pay(Product $product, User $user): string
    {
        return 'EUR payment';
    }
}
