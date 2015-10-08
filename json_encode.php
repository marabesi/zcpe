<?php

$data = [
    'user' => [
        'name' => 'Matheus Marabesi'
    ]
];

print json_encode($data);

print PHP_EOL;

print json_encode([
    'user' => [
        'name "Marabesi"',
    ]
], JSON_HEX_QUOT);

print PHP_EOL;

print json_encode([
    'user' => [
        'name <Marabesi>',
    ]
], JSON_HEX_TAG);

print PHP_EOL;

print json_encode([
    'user' => [
        'name <Marabesi>',
        'name "Marabesi"',
    ]
], JSON_HEX_QUOT | JSON_HEX_TAG);

print PHP_EOL;

print json_encode([
    'user' => [
        'name' => [
            'name' => [
                'name' => [
                    'Marabesi'
                ]
            ]
        ],
    ],
    'simple' => [
        'key' => 'value'
    ]
], JSON_HEX_QUOT | JSON_HEX_TAG, 3);

print PHP_EOL;