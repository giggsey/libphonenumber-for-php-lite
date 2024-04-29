<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'MX',
    'countryCode' => 52,
    'generalDesc' => [
        'pattern' => '[1-9]\\d{9,10}',
        'posLength' => [
            10,
            11,
        ],
        'posLengthLocal' => [
            7,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[2-9]\\d{9}',
        'example' => '2123456789',
        'posLength' => [
            10,
        ],
        'posLengthLocal' => [
            7,
        ],
    ],
    'mobile' => [
        'pattern' => '1\\d{10}',
        'example' => '11234567890',
        'posLength' => [
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
        'pattern' => '900\\d{7}',
        'example' => '9001234567',
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
    'nationalPrefix' => '01',
    'nationalPrefixForParsing' => '01|04[45](\\d{10})',
    'nationalPrefixTransformRule' => '1$1',
    'numberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[89]00',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d{3})(\\d{2})(\\d{5})',
            'format' => '$2 $3',
            'leadingDigitsPatterns' => [
                '901',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '33|55|81',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[2467]|3[0-24-9]|5[0-46-9]|8[2-9]|9[1-9]',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
            'format' => '045 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '1(?:33|55|81)',
            ],
            'nationalPrefixFormattingRule' => '$1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{4})',
            'format' => '045 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '1(?:[124579]|3[0-24-9]|5[0-46-9]|8[02-9])',
            ],
            'nationalPrefixFormattingRule' => '$1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
    ],
    'intlNumberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[89]00',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d{3})(\\d{2})(\\d{5})',
            'format' => '$2 $3',
            'leadingDigitsPatterns' => [
                '901',
            ],
        ],
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '33|55|81',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '[2467]|3[0-24-9]|5[0-46-9]|8[2-9]|9[1-9]',
            ],
            'nationalPrefixFormattingRule' => '01 $1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
        [
            'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '1(?:33|55|81)',
            ],
        ],
        [
            'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '1(?:[124579]|3[0-24-9]|5[0-46-9]|8[02-9])',
            ],
        ],
    ],
];
