<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'KR',
    'countryCode' => 82,
    'generalDesc' => [
        'pattern' => '[1-7]\\d{3,9}|8\\d{8}',
        'posLength' => [
            4,
            5,
            6,
            7,
            8,
            9,
            10,
        ],
    ],
    'fixedLine' => [
        'pattern' => '(?:2|[34][1-3]|5[1-5]|6[1-4])(?:1\\d{2,3}|[2-9]\\d{6,7})',
        'example' => '22123456',
    ],
    'mobile' => [
        'pattern' => '1[0-25-9]\\d{7,8}',
        'example' => '1023456789',
        'posLength' => [
            9,
            10,
        ],
    ],
    'tollFree' => [
        'pattern' => '80\\d{7}',
        'example' => '801234567',
        'posLength' => [
            9,
        ],
    ],
    'premiumRate' => [
        'pattern' => '60[2-9]\\d{6}',
        'example' => '602345678',
        'posLength' => [
            9,
        ],
    ],
    'sharedCost' => [
        'posLength' => [
            -1,
        ],
    ],
    'personalNumber' => [
        'pattern' => '50\\d{8}',
        'example' => '5012345678',
        'posLength' => [
            10,
        ],
    ],
    'voip' => [
        'pattern' => '70\\d{8}',
        'example' => '7012345678',
        'posLength' => [
            10,
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
    'internationalPrefix' => '00(?:[124-68]|[37]\\d{2})',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0(8[1-46-8]|85\\d{2})?',
    'numberFormat' => [
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '1(?:0|1[19]|[69]9|5[458])|[57]0',
                '1(?:0|1[19]|[69]9|5(?:44|59|8))|[57]0',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '1(?:[169][2-8]|[78]|5[1-4])|[68]0|[3-6][1-9][2-9]',
                '1(?:[169][2-8]|[78]|5(?:[1-3]|4[56]))|[68]0|[3-6][1-9][2-9]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d)(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '131',
                '1312',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{2})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '131',
                '131[13-9]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '13[2-9]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{2})(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3-$4',
            'leadingDigitsPatterns' => [
                '30',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{4})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '2(?:[26]|3[0-467])',
                '2(?:[26]|3(?:01|1[45]|2[17-9]|39|4|6[67]|7[078]))',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{3})(\\d{4})',
            'format' => '$1-$2-$3',
            'leadingDigitsPatterns' => [
                '2(?:3[0-35-9]|[457-9])',
                '2(?:3(?:0[02-9]|1[0-36-9]|2[02-6]|3[0-8]|6[0-589]|7[1-69]|[589])|[457-9])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{3})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '21[0-46-9]',
                '21(?:[0-247-9]|3[124]|6[1269])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d)(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '21[36]',
                '21(?:3[035-9]|6[03-578])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{3})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '[3-6][1-9]1',
                '[3-6][1-9]1(?:[0-46-9])',
                '[3-6][1-9]1(?:[0-247-9]|3[124]|6[1269])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{2})(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '[3-6][1-9]1',
                '[3-6][1-9]1[36]',
                '[3-6][1-9]1(?:3[035-9]|6[03-578])',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
];
