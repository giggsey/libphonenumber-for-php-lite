<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'id' => 'US',
    'countryCode' => 1,
    'generalDesc' => [
        'pattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
        'posLength' => [
            10,
        ],
        'posLengthLocal' => [
            7,
        ],
    ],
    'fixedLine' => [
        'pattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
        'example' => '1234567890',
        'posLengthLocal' => [
            7,
        ],
    ],
    'mobile' => [
        'pattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
        'example' => '1234567890',
        'posLengthLocal' => [
            7,
        ],
    ],
    'tollFree' => [
        'pattern' => '8(?:00|66|77|88)\\d{7}',
        'example' => '8004567890',
    ],
    'premiumRate' => [
        'pattern' => '900\\d{7}',
        'example' => '9004567890',
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
        'pattern' => '800\\d{7}',
        'example' => '8004567890',
    ],
    'internationalPrefix' => '011',
    'nationalPrefix' => '1',
    'preferredExtnPrefix' => ' extn. ',
    'nationalPrefixForParsing' => '1',
    'sameMobileAndFixedLinePattern' => true,
    'numberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{4})',
            'format' => '$1 $2',
            'leadingDigitsPatterns' => [],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
        ],
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
    ],
    'intlNumberFormat' => [
        [
            'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => true,
        ],
    ],
    'mainCountryForCode' => true,
    'mobileNumberPortableRegion' => true,
];
