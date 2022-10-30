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
    'NationalNumberPattern' => '[0389]\\d{5,10}',
    'PossibleLength' =>
    [
      0 => 6,
      1 => 9,
      2 => 10,
      3 => 11,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '0\\d{9,10}',
    'ExampleNumber' => '0123456789',
    'PossibleLength' =>
    [
      0 => 10,
      1 => 11,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '3\\d{8,9}',
    'ExampleNumber' => '3123456789',
    'PossibleLength' =>
    [
      0 => 9,
      1 => 10,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80(?:0\\d{6}|3\\d{3})',
    'ExampleNumber' => '800123456',
    'PossibleLength' =>
    [
      0 => 6,
      1 => 9,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '89(?:2\\d{3}|9\\d{6})',
    'ExampleNumber' => '892123',
    'PossibleLength' =>
    [
      0 => 6,
      1 => 9,
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
  'id' => 'IT',
  'countryCode' => 39,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '0[26]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{3})(\\d{4})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '0[13-57-9]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '3',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d{3})(\\d{3,6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '8',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
