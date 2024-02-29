<?php

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

use App\PaymentGateway\Paddle\CustomerProfile;

class Transaction
{
    public function __construct()
    {
        var_dump(new CustomerProfile());
    }
}
