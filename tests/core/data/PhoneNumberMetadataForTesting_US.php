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
    'NationalNumberPattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
    'PossibleLength' =>
    [
      0 => 10,
    ],
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
    'ExampleNumber' => '1234567890',
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '[13-689]\\d{9}|2[0-35-9]\\d{8}',
    'ExampleNumber' => '1234567890',
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '8(?:00|66|77|88)\\d{7}',
    'ExampleNumber' => '8004567890',
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '900\\d{7}',
    'ExampleNumber' => '9004567890',
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
    'NationalNumberPattern' => '800\\d{7}',
    'ExampleNumber' => '8004567890',
  ],
  'id' => 'US',
  'countryCode' => 1,
  'internationalPrefix' => '011',
  'nationalPrefix' => '1',
  'preferredExtnPrefix' => ' extn. ',
  'nationalPrefixForParsing' => '1',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
  ],
  'intlNumberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
  ],
  'mainCountryForCode' => true,
  'mobileNumberPortableRegion' => true,
];
