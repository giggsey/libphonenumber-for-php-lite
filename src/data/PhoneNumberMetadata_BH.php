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
    'NationalNumberPattern' => '[136-9]\\d{7}',
    'PossibleLength' =>
    [
      0 => 8,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '(?:1(?:3[1356]|6[0156]|7\\d)\\d|6(?:1[16]\\d|500|6(?:0\\d|3[12]|44|7[7-9]|88)|9[69][69])|7(?:1(?:11|78)|7\\d\\d))\\d{4}',
    'ExampleNumber' => '17001234',
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '(?:3(?:[1-79]\\d|8[0-47-9])\\d|6(?:3(?:00|33|6[16])|6(?:3[03-9]|[69]\\d|7[0-6])))\\d{4}',
    'ExampleNumber' => '36001234',
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80\\d{6}',
    'ExampleNumber' => '80123456',
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '(?:87|9[014578])\\d{6}',
    'ExampleNumber' => '90123456',
  ],
  'sharedCost' =>
  [
    'NationalNumberPattern' => '84\\d{6}',
    'ExampleNumber' => '84123456',
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
  'id' => 'BH',
  'countryCode' => 973,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '[13679]|8[047]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
];
