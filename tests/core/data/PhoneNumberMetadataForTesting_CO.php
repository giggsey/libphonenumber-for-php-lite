<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'CO',
    'countryCode' => 57,
    'generalDesc' => [
        'pattern' => '(?:60|3\\d)\\d{8}',
        'posLength' => [
            10,
        ],
    ],
    'fixedLine' => [
        'pattern' => '60\\d{8}',
        'example' => '6012345678',
    ],
    'mobile' => [
        'pattern' => '3(?:0[0-5]|1\\d|2[0-3]|5[01]|70)\\d{7}',
        'example' => '3211234567',
    ],
    'tollFree' => [
        'posLength' => [
            -1,
        ],
    ],
    'premiumRate' => [
        'posLength' => [
            -1,
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
    'internationalPrefix' => '',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0(4(?:[14]4|56)|[579])?',
    'numberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{7})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '6',
            ],
            'nationalPrefixFormattingRule' => '($1)',
            'domesticCarrierCodeFormattingRule' => '0$CC $1',
        ],
        [
            'pattern' => '(\\d{3})(\\d{7})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '3',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '0$CC $1',
        ],
    ],
    'mobileNumberPortableRegion' => true,
];
