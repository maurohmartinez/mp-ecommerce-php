<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398');

// Nueva preferencia
$preference = new MercadoPago\Preference();

// Item
$item = new MercadoPago\Item();
$item->id = 1234;
$item->title = $_POST['title'] ?? 'Nombre del producto seleccionado.';
$item->description = 'Dispositivo móvil de Tienda e-commerce';
$item->picture_url = $_POST['img'] ?? null;
$item->quantity = 1;
$item->unit_price = $_POST['price'] ?? null;

//  Agregar items
$preference->items = array($item);

// Payer
$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->email = "test_user_63274575@testuser.com";
$payer->identification = array(
    "type" => "DNI",
    "number" => "22333444"
);
$payer->date_created = "2020-03-03T12:58:41.425-04:00";
$payer->phone = array(
    "area_code" => "011",
    "number" => "2222 3333"
);
$payer->address = array(
    "street_name" => "Falsa",
    "street_number" => 123,
    "zip_code" => "1111"
);

//  Agregar payer
$preference->payer = $payer;

// Redirecciones
$preference->back_urls = array(
    "success" => "https://maurohmartinez-mp-commerce-php.herokuapp.com/procesar-pago.php?success",
    "failure" => "https://maurohmartinez-mp-commerce-php.herokuapp.com/procesar-pago.php?failure",
    "pending" => "https://maurohmartinez-mp-commerce-php.herokuapp.com/procesar-pago.php?pending"
);

// External reference
$preference->external_reference = 'ABCD1234';

// Auto return
$preference->auto_return = "approved";

// Notification
$preference->notification_url = "https://maurohmartinez-mp-commerce-php.herokuapp.com/ipn";

// Medios de pago
$preference->payment_methods = array(
    "excluded_payment_methods" => array(
        array("id" => "amex")
    ),
    "excluded_payment_types" => array(
        array("id" => "atm")
    ),
    "installments" => 6
);

// Guardar
$preference->save();
