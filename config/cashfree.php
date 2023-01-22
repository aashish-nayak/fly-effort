<?php

return [

    'appID' => env('CASHFREE_KEY', 'cash free app id'),
    'secretKey' => env('CASHFREE_SECRET', 'secret key'),
    'orderCurrency' => env('ORDER_CURRENCY', 'inr'),
    'orderPrefix' => env('ORDER_PREFIX', 'FLY_'),
];