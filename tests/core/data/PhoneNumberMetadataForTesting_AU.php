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
    'NationalNumberPattern' => '[1-578]\\d{4,14}',
    'PossibleLength' =>
    [
      0 => 9,
      1 => 10,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '[2378]\\d{8}',
    'ExampleNumber' => '212345678',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '4\\d{8}',
    'ExampleNumber' => '412345678',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '1800\\d{6}',
    'ExampleNumber' => '1800123456',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '190[0126]\\d{6}',
    'ExampleNumber' => '1900123456',
    'PossibleLength' =>
    [
      0 => 10,
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
  'id' => 'AU',
  'countryCode' => 61,
  'internationalPrefix' => '001[12]',
  'preferredInternationalPrefix' => '0011',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{4})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '1',
      ],
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d)(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[2-478]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
