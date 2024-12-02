<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'UZ',
    'countryCode' => 998,
    'generalDesc' => [
        'pattern' => '[69]\\d{8}',
        'posLength' => [
            9,
        ],
        'posLengthLocal' => [
            7,
        ],
    ],
    'fixedLine' => [
        'pattern' => '6122\\d{5}',
        'example' => '662345678',
        'posLengthLocal' => [
            7,
        ],
    ],
    'mobile' => [
        'pattern' => '9[0-57-9]\\d{7}',
        'example' => '912345678',
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
    'internationalPrefix' => '810',
    'preferredInternationalPrefix' => '8~10',
    'nationalPrefix' => '8',
    'nationalPrefixForParsing' => '8',
    'numberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '[679]',
            ],
            'nationalPrefixFormattingRule' => '8 $1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
