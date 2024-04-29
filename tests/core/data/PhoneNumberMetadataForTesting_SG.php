<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'SG',
    'countryCode' => 65,
    'generalDesc' => [
        'pattern' => '[13689]\\d{7,10}',
        'posLength' => [
            8,
            10,
            11,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[36]\\d{7}',
        'example' => '31234567',
        'posLength' => [
            8,
        ],
    ],
    'mobile' => [
        'pattern' => '[89]\\d{7}',
        'example' => '81234567',
        'posLength' => [
            8,
        ],
    ],
    'tollFree' => [
        'pattern' => '1?800\\d{7}',
        'example' => '8001234567',
        'posLength' => [
            10,
            11,
        ],
    ],
    'premiumRate' => [
        'pattern' => '1900\\d{7}',
        'example' => '19001234567',
        'posLength' => [
            11,
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
    'internationalPrefix' => '0[0-3][0-9]',
    'nationalPrefixForParsing' => '777777',
    'numberFormat' => [
        [
            'pattern' => '(\\d{4})(\\d{4})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '[369]|8[1-9]',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{4})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '1[89]',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '800',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
