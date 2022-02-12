<?php

return [
    'custom_shipping_cost' => [
        'code'         => 'custom_shipping_cost',
        'title'        => 'Custom_shipping_cost',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'ACME\custom_shipping_cost\Carriers\custom_shipping_cost',
    ],
];

//'description'  => 'Custom_shipping_cost',
