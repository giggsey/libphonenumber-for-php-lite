<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'CN',
    'countryCode' => 0,
    'generalDesc' => [
        'pattern' => '[19]\\d\\d(?:\\d{2,3})?',
        'posLength' => [
            3,
            5,
            6,
        ],
    ],
    'tollFree' => [
        'pattern' => '1(?:1[09]|2(?:[02]|[13]\\d\\d))',
        'example' => '110',
        'posLength' => [
            3,
            5,
        ],
    ],
    'premiumRate' => [
        'posLength' => [
            -1,
        ],
    ],
    'emergency' => [
        'pattern' => '1(?:1[09]|20)',
        'example' => '110',
        'posLength' => [
            3,
        ],
    ],
    'shortCode' => [
        'pattern' => '1(?:00\\d\\d|1[029]|2(?:[02]|110|395))|95\\d{3,4}',
        'example' => '110',
    ],
    'standardRate' => [
        'pattern' => '1(?:00\\d\\d|12)|95\\d{3,4}',
        'example' => '112',
    ],
    'carrierSpecific' => [
        'posLength' => [
            -1,
        ],
    ],
    'smsServices' => [
        'pattern' => '121\\d\\d',
        'example' => '12100',
        'posLength' => [
            5,
        ],
    ],
    'internationalPrefix' => '',
    'numberFormat' => [],
];
