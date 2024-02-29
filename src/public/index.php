<?php

// use Ramsey\Uuid\UuidFactory;

// declare(strict_types=1);

// // phpinfo();

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);

var_dump(new Transaction());

$id = new \Ramsey\Uuid\UuidFactory();

echo '<br><br>' . $id->uuid4();

include('views/layout.php');
