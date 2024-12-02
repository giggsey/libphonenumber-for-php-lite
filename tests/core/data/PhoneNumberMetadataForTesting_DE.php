<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'DE',
    'countryCode' => 49,
    'generalDesc' => [
        'pattern' => '\\d{4,14}',
        'posLength' => [
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
        ],
        'posLengthLocal' => [
            2,
            3,
        ],
    ],
    'fixedLine' => [
        'pattern' => '(?:[24-6]\\d{2}|3[03-9]\\d|[789](?:0[2-9]|[1-9]\\d))\\d{1,8}',
        'example' => '30123456',
        'posLengthLocal' => [
            2,
            3,
        ],
    ],
    'mobile' => [
        'pattern' => '1(5\\d{9}|7\\d{8}|6[02]\\d{8}|63\\d{7})',
        'example' => '15123456789',
        'posLength' => [
            10,
            11,
        ],
    ],
    'tollFree' => [
        'pattern' => '800\\d{7}',
        'example' => '8001234567',
        'posLength' => [
            10,
        ],
    ],
    'premiumRate' => [
        'pattern' => '900([135]\\d{6}|9\\d{7})',
        'example' => '9001234567',
        'posLength' => [
            10,
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
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'numberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{3,8})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '2|3[3-9]|906|[4-9][1-9]1',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{4,11})',
            'format' => '$1/$2',
            'leadingDigitsPatterns' => [
                '[34]0|[68]9',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{2})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '[4-9]',
                '[4-6]|[7-9](?:\\d[1-9]|[1-9]\\d)',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{4})(\\d{2,7})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [
                '[4-9]',
                '[4-6]|[7-9](?:\\d[1-9]|[1-9]\\d)',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{1})(\\d{6})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '800',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3,4})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '900',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
