<?php
// Get payment info
$ch = curl_init("https://api.mercadopago.com/v1/payments/" . $_POST['payment_id'] . "?access_token=APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$payment_response = json_decode(curl_exec($ch));
curl_close($ch);
?>
<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }

        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }

        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }

        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
</head>

<body class="as-theme-light-heroimage">

    <div class="stack">
        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details" style="padding: 40px;">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">
                                    <h2 class=" as-filter-button-text">
                                        <?php echo $payment_response->status == 'approved' ? '¡Listo!' : 'Revise los detalles de su pago'; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="as-accessories-results">
                            <p style="margin-top: 15px;"><?php
                            switch ($payment_response->status) {
                                case 'pending':
                                    echo 'Su pago está en estado pendiente. Por favor, siga los pasos enviados a su email para finalizar.';
                                    break;
                                case 'approved':
                                    echo 'Su pago ha sido realizado con éxito. A continuación los datos del mismo:';
                                    break;
                                case 'authorized':
                                    echo 'Su pago fue autorizado pero no ha sido concretado aún.';
                                    break;
                                case 'in_process':
                                    echo 'Su pago está en revisión.';
                                    break;
                                case 'in_mediation':
                                    echo 'Existe una disputa iniciada.';
                                    break;
                                case 'rejected':
                                    echo 'Su pago ha sido rechazado. Intente nuevamente.';
                                    break;
                                case 'cancelled':
                                    echo 'Su pago está cancelado.';
                                    break;
                                case 'refunded':
                                    echo 'El pago fue devuelto.';
                                    break;
                                case 'charged_back':
                                    echo 'Se ha realizado un contracargo en su tarjeta de crédito.';
                                    break;
                            }
                            ?></p>
                            <?php if($payment_response->status == 'approved'){ ?>
                            <p><strong>Estado:</strong> <?php echo $payment_response->status; ?></p>
                            <p><strong>Método de pago:</strong> <?php echo $payment_response->payment_method_id; ?></p>
                            <p><strong>Monto:</strong> $<?php echo $payment_response->transaction_amount; ?></p>
                            <p><strong>Número de Orden:</strong> <?php echo $payment_response->external_reference; ?></p>
                            <p><strong>Id de Mercado Pago:</strong> <?php echo $payment_response->id; ?></p>
                            <?php } ?>
                        </div>
                        <div style="margin-top: 40px;">
                            <a href="https://maurohmartinez-mp-commerce-php.herokuapp.com">Volver a la página inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes" style="margin-top: 50px;">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno 2019
                </div>
            </div>
        </div>

    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div id="ac-gn-viewport-emitter"> </div>
</body>

</html>