<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'NZ',
    'countryCode' => 64,
    'generalDesc' => [
        'pattern' => '[289]\\d{7,9}|[3-7]\\d{7}',
        'posLength' => [
            7,
            8,
            9,
            10,
        ],
    ],
    'fixedLine' => [
        'pattern' => '24099\\d{3}|(?:3[2-79]|[479][2-689]|6[235-9])\\d{6}',
        'example' => '24099123',
        'posLength' => [
            7,
            8,
        ],
    ],
    'mobile' => [
        'pattern' => '2(?:[027]\\d{7}|9\\d{6,7}|1(?:0\\d{5,7}|[12]\\d{5,6}|[3-9]\\d{5})|4[1-9]\\d{6}|8\\d{7,8})',
        'example' => '201234567',
        'posLength' => [
            8,
            9,
            10,
        ],
    ],
    'tollFree' => [
        'pattern' => '800\\d{6,7}',
        'example' => '8001234567',
        'posLength' => [
            9,
            10,
        ],
    ],
    'premiumRate' => [
        'pattern' => '900\\d{6,7}',
        'example' => '9001234567',
        'posLength' => [
            9,
            10,
        ],
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
            'pattern' => '(\\d)(\\d{3})(\\d{4})',
            'format' => '$1-$2 $3',
            'leadingDigitsPatterns' => [
                '24|[34679]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{3})(\\d{3,5})',
            'format' => '$1-$2 $3',
            'leadingDigitsPatterns' => [
                '2[179]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{3,4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[89]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
