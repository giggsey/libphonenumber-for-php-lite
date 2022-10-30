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
    'NationalNumberPattern' => '\\d{10}',
    'PossibleLength' =>
    [
      0 => 9,
      1 => 10,
    ],
    'PossibleLengthLocalOnly' =>
    [
      0 => 6,
      1 => 7,
      2 => 8,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '[1-6]\\d{9}',
    'ExampleNumber' => '3123456789',
    'PossibleLengthLocalOnly' =>
    [
      0 => 6,
      1 => 7,
      2 => 8,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '7[1-57-9]\\d{8}',
    'ExampleNumber' => '7123456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80\\d{8}',
    'ExampleNumber' => '8023456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '9[018]\\d{8}',
    'ExampleNumber' => '9023456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'sharedCost' =>
  [
    'NationalNumberPattern' => '8(?:4[3-5]|7[0-2])\\d{7}',
    'ExampleNumber' => '8433456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'personalNumber' =>
  [
    'NationalNumberPattern' => '70\\d{8}',
    'ExampleNumber' => '7033456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'voip' =>
  [
    'NationalNumberPattern' => '56\\d{8}',
    'ExampleNumber' => '5633456789',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'pager' =>
  [
    'NationalNumberPattern' => '76\\d{8}',
    'ExampleNumber' => '7623456789',
    'PossibleLength' =>
    [
      0 => 10,
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
  'id' => 'GB',
  'countryCode' => 44,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[1-59]|[78]0',
      ],
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      [
        0 => '6',
      ],
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{4})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '7[1-57-9]',
      ],
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '8[47]',
      ],
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
];
