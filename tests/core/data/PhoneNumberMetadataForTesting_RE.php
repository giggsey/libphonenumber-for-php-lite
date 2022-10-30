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
    'NationalNumberPattern' => '[268]\\d{8}',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '262\\d{6}',
    'ExampleNumber' => '262161234',
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '6(?:9[23]|47)\\d{6}',
    'ExampleNumber' => '692123456',
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80\\d{7}',
    'ExampleNumber' => '801234567',
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '8(?:1[01]|2[0156]|84|9[0-37-9])\\d{6}',
    'ExampleNumber' => '810123456',
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
  'id' => 'RE',
  'countryCode' => 262,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      [
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'leadingDigits' => '262|6(?:9[23]|47)|8',
  'mobileNumberPortableRegion' => false,
];
