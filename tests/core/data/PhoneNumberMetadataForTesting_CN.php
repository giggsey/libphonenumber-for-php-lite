<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'CN',
    'countryCode' => 86,
    'generalDesc' => [
        'pattern' => '[1-7]\\d{6,11}|8[0-357-9]\\d{6,9}|9\\d{7,10}',
        'posLength' => [
            11,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[2-9]\\d{10}',
        'example' => '91234567',
    ],
    'mobile' => [
        'pattern' => '1(?:[38]\\d|4[57]|5[0-35-9]|7[0136-8])\\d{8}',
        'example' => '13123456789',
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
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'numberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{5,6})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '[3-9]',
                '[3-9]\\d{2}[19]',
                '[3-9]\\d{2}(?:10|95)',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '$CC $1',
        ],
        [
            'pattern' => '(\\d{3})(\\d{8})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '1',
            ],
            'nationalPrefixFormattingRule' => '$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
