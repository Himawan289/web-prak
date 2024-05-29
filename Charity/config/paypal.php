<?php

return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AQfM7J8Ku02pezeqgX4Y2IJGDzmvAfin-vvK5HOqdK-sF1PhkTmxIQij3QEEciJL42OX-KbQ2rGGEdnw'),
    'secret' => env('PAYPAL_SECRET','EBK-737eseACTsQRnjS4-9G5qIFAch761vGrNzBCWOR3toWlcOu-OBj2Qz8eAcfaOVXjHL5YRmt_AT1n'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];