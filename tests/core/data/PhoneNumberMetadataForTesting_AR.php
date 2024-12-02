<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'AR',
    'countryCode' => 54,
    'generalDesc' => [
        'pattern' => '[1-3689]\\d{9,10}',
        'posLength' => [
            6,
            7,
            8,
            9,
            10,
            11,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[1-3]\\d{5,9}',
        'example' => '1234567890',
        'posLength' => [
            6,
            7,
            8,
            9,
            10,
        ],
    ],
    'mobile' => [
        'pattern' => '9\\d{10}|[1-3]\\d{9}',
        'example' => '9234567890',
        'posLength' => [
            10,
            11,
        ],
    ],
    'tollFree' => [
        'pattern' => '80\\d{8}',
        'example' => '8034567890',
        'posLength' => [
            10,
        ],
    ],
    'premiumRate' => [
        'pattern' => '6(0\\d|10)\\d{7}',
        'example' => '6234567890',
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
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0(?:(11|343|3715)15)?',
    'nationalPrefixTransformRule' => '9$1',
    'numberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '11',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{4})(\\d{2})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '1[02-9]|[23]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$2 15 $3-$4',
            'leadingDigitsPatterns' => [
                '911',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{4})(\\d{2})(\\d{4})',
            'format' => '$2 $3-$4',
            'leadingDigitsPatterns' => [
                '9(?:1[02-9]|[23])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '0$1 $CC',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '[68]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
    'intlNumberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '11',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{4})(\\d{2})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '1[02-9]|[23]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '911',
            ],
        ],
        [
            'pattern' => '(\\d)(\\d{4})(\\d{2})(\\d{4})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '9(?:1[02-9]|[23])',
            ],
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '[68]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
