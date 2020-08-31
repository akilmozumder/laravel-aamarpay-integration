<?php
return [
    'store_id' => 'joblinkcorporate',
    'signature_key' => 'aa04ca784ec0d7e4f675e12998ff999d',
    'sandbox' => false,
    'redirect_url' => [
        
        'success' => [
            'route' => 'payment.success'
        ],
        'cancel' => [
            'route' => 'payment.cancel' 
        ]
    ]
];