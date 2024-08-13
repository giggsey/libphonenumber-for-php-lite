<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'BJ',
    'countryCode' => 229,
    'generalDesc' => [
        'pattern' => '[24-689]\\d{7}',
        'posLength' => [
            8,
        ],
    ],
    'fixedLine' => [
        'pattern' => '2090\\d{4}|2(?:02|1[037]|2[45]|3[68]|4\\d)\\d{5}',
        'example' => '20211234',
    ],
    'mobile' => [
        'pattern' => '(?:4[0-8]|[56]\\d|9[013-9])\\d{6}',
        'example' => '90011234',
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
        'pattern' => '857[58]\\d{4}',
        'example' => '85751234',
    ],
    'pager' => [
        'posLength' => [
            -1,
        ],
    ],
    'uan' => [
        'pattern' => '81\\d{6}',
        'example' => '81123456',
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
    'numberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '[24-689]',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
