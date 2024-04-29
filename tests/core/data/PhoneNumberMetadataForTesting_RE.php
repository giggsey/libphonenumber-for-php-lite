<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'RE',
    'countryCode' => 262,
    'generalDesc' => [
        'pattern' => '[268]\\d{8}',
        'posLength' => [
            9,
        ],
    ],
    'fixedLine' => [
        'pattern' => '262\\d{6}',
        'example' => '262161234',
    ],
    'mobile' => [
        'pattern' => '6(?:9[23]|47)\\d{6}',
        'example' => '692123456',
    ],
    'tollFree' => [
        'pattern' => '80\\d{7}',
        'example' => '801234567',
    ],
    'premiumRate' => [
        'pattern' => '8(?:1[01]|2[0156]|84|9[0-37-9])\\d{6}',
        'example' => '810123456',
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
            'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
    'leadingDigits' => '262|6(?:9[23]|47)|8',
];
