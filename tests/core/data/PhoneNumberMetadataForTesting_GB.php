<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'GB',
    'countryCode' => 44,
    'generalDesc' => [
        'pattern' => '\\d{10}',
        'posLength' => [
            9,
            10,
        ],
        'posLengthLocal' => [
            6,
            7,
            8,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[1-6]\\d{9}',
        'example' => '3123456789',
        'posLengthLocal' => [
            6,
            7,
            8,
        ],
    ],
    'mobile' => [
        'pattern' => '7[1-57-9]\\d{8}',
        'example' => '7123456789',
        'posLength' => [
            10,
        ],
    ],
    'tollFree' => [
        'pattern' => '80\\d{8}',
        'example' => '8023456789',
        'posLength' => [
            10,
        ],
    ],
    'premiumRate' => [
        'pattern' => '9[018]\\d{8}',
        'example' => '9023456789',
        'posLength' => [
            10,
        ],
    ],
    'sharedCost' => [
        'pattern' => '8(?:4[3-5]|7[0-2])\\d{7}',
        'example' => '8433456789',
        'posLength' => [
            10,
        ],
    ],
    'personalNumber' => [
        'pattern' => '70\\d{8}',
        'example' => '7033456789',
        'posLength' => [
            10,
        ],
    ],
    'voip' => [
        'pattern' => '56\\d{8}',
        'example' => '5633456789',
        'posLength' => [
            10,
        ],
    ],
    'pager' => [
        'pattern' => '76\\d{8}',
        'example' => '7623456789',
        'posLength' => [
            10,
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
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[1-59]|[78]0',
            ],
            'nationalPrefixFormattingRule' => '(0$1)',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{3})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '6',
            ],
            'nationalPrefixFormattingRule' => '(0$1)',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{4})(\\d{3})(\\d{3})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '7[1-57-9]',
            ],
            'nationalPrefixFormattingRule' => '(0$1)',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '8[47]',
            ],
            'nationalPrefixFormattingRule' => '(0$1)',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
    'mobileNumberPortableRegion' => true,
];
