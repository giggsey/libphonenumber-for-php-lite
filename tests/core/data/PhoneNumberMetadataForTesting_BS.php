<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'BS',
    'countryCode' => 1,
    'generalDesc' => [
        'pattern' => '(242|8(00|66|77|88)|900)\\d{7}',
        'posLength' => [
            10,
        ],
        'posLengthLocal' => [
            7,
        ],
    ],
    'fixedLine' => [
        'pattern' => '242(?:3(?:02|[236][1-9]|4[0-24-9]|5[0-68]|7[3-57]|9[2-5])|4(?:2[237]|51|64|77)|502|636|702)\\d{4}',
        'example' => '2425027890',
        'posLengthLocal' => [
            7,
        ],
    ],
    'mobile' => [
        'pattern' => '242(357|359|457|557)\\d{4}',
        'example' => '2423577890',
    ],
    'tollFree' => [
        'pattern' => '8(00|66|77|88)\\d{7}',
        'example' => '8001234567',
    ],
    'premiumRate' => [
        'pattern' => '900\\d{7}',
        'example' => '9001234567',
    ],
    'sharedCost' => [
        'posLength' => [
            -1,
        ],
    ],
    'personalNumber' => [
        'posLength' => [
            -1,
        ],
    ],
    'voip' => [
        'posLength' => [
            -1,
        ],
    ],
    'pager' => [
        'posLength' => [
            -1,
        ],
    ],
    'uan' => [
        'posLength' => [
            -1,
        ],
    ],
    'voicemail' => [
        'posLength' => [
            -1,
        ],
    ],
    'noInternationalDialling' => [
        'posLength' => [
            -1,
        ],
    ],
    'internationalPrefix' => '011',
    'nationalPrefix' => '1',
    'nationalPrefixForParsing' => '1',
    'numberFormat' => [],
];
