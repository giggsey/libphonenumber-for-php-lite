<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
  'generalDesc' =>
  [
    'NationalNumberPattern' => '[267]\\d{7}|[89]00\\d{4}(?:\\d{4})?',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 8,
      2 => 11,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '2(?:[1-6]\\d{3}|[79]90[034]|890[0245])\\d{3}',
    'ExampleNumber' => '21234567',
    'PossibleLength' =>
    [
      0 => 8,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '66(?:[02-9]\\d\\d|1(?:[02-9]\\d|16))\\d{3}|(?:6[0-57-9]|7\\d)\\d{6}',
    'ExampleNumber' => '70123456',
    'PossibleLength' =>
    [
      0 => 8,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '800\\d{4}(?:\\d{4})?',
    'ExampleNumber' => '8001234',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 11,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '900\\d{4}(?:\\d{4})?',
    'ExampleNumber' => '9001234',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 11,
    ],
  ],
  'sharedCost' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'personalNumber' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'voip' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'pager' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'uan' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'voicemail' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'noInternationalDialling' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'id' => 'SV',
  'countryCode' => 503,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '[89]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '[267]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{3})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[89]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
