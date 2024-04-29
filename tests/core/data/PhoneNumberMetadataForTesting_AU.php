<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'AU',
    'countryCode' => 61,
    'generalDesc' => [
        'pattern' => '[1-578]\\d{4,14}',
        'posLength' => [
            9,
            10,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[2378]\\d{8}',
        'example' => '212345678',
        'posLength' => [
            9,
        ],
    ],
    'mobile' => [
        'pattern' => '4\\d{8}',
        'example' => '412345678',
        'posLength' => [
            9,
        ],
    ],
    'tollFree' => [
        'pattern' => '1800\\d{6}',
        'example' => '1800123456',
        'posLength' => [
            10,
        ],
    ],
    'premiumRate' => [
        'pattern' => '190[0126]\\d{6}',
        'example' => '1900123456',
        'posLength' => [
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
    'internationalPrefix' => '001[12]',
    'preferredInternationalPrefix' => '0011',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'numberFormat' => [
        [
            'pattern' => '(\\d{4})(\\d{3})(\\d{3})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '1',
            ],
            'nationalPrefixFormattingRule' => '$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[2-478]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
