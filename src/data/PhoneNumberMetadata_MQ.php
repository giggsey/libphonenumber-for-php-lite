<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'MQ',
    'countryCode' => 596,
    'generalDesc' => [
        'pattern' => '596\\d{6}|(?:69|80|9\\d)\\d{7}',
        'posLength' => [
            9,
        ],
    ],
    'fixedLine' => [
        'pattern' => '596(?:[03-7]\\d|1[05]|2[7-9]|8[0-39]|9[04-9])\\d{4}',
        'example' => '596301234',
    ],
    'mobile' => [
        'pattern' => '69(?:6(?:[0-46-9]\\d|5[0-6])|727)\\d{4}',
        'example' => '696201234',
    ],
    'tollFree' => [
        'pattern' => '80[0-5]\\d{6}',
        'example' => '800012345',
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
        'pattern' => '9(?:397[0-3]|477[0-5]|76(?:6\\d|7[0-367]))\\d{4}',
        'example' => '976612345',
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
            'leadingDigitsPatterns' => [
                '[569]',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
            'format' => '$1 $2 $3 $4',
            'leadingDigitsPatterns' => [
                '8',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
        ],
    ],
    'mobileNumberPortableRegion' => true,
];
