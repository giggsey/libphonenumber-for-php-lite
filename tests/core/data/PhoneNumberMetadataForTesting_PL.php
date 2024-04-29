<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'PL',
    'countryCode' => 48,
    'generalDesc' => [
        'pattern' => '[1-9]\\d{8}',
        'posLength' => [
            9,
        ],
    ],
    'fixedLine' => [
        'posLength' => [
            -1,
        ],
    ],
    'mobile' => [
        'pattern' => '(?:5[01]|6[069]|7[289]|88)\\d{7}',
        'example' => '501234567',
    ],
    'tollFree' => [
        'pattern' => '800\\d{6}',
        'example' => '800123456',
    ],
    'premiumRate' => [
        'pattern' => '70\\d{7}',
        'example' => '701234567',
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
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'numberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
