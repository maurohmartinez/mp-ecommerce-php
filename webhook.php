<?php
// SDK de Mercado Pago
// require __DIR__ .  '/vendor/autoload.php';

// Credenciales
// MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398');

// switch($_POST["type"]) {
//     case "payment":
//         $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
//         break;
//     case "plan":
//         $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
//         break;
//     case "subscription":
//         $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
//         break;
//     case "invoice":
//         $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
//         break;
// }

$file = 'webhooks.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $_POST["id"] ?? 'Nothing...' . "\n";
// Write the contents back to the file
file_put_contents($file, $current);

header("HTTP/1.1 200 OK");