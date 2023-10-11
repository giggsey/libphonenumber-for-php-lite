<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return  [
  'generalDesc' =>
   [
    'NationalNumberPattern' => '[289]\\d{7,9}|[3-7]\\d{7}',
    'PossibleLength' =>
     [
      0 => 7,
      1 => 8,
      2 => 9,
      3 => 10,
    ],
  ],
  'fixedLine' =>
   [
    'NationalNumberPattern' => '24099\\d{3}|(?:3[2-79]|[479][2-689]|6[235-9])\\d{6}',
    'ExampleNumber' => '24099123',
    'PossibleLength' =>
     [
      0 => 7,
      1 => 8,
    ],
  ],
  'mobile' =>
   [
    'NationalNumberPattern' => '2(?:[027]\\d{7}|9\\d{6,7}|1(?:0\\d{5,7}|[12]\\d{5,6}|[3-9]\\d{5})|4[1-9]\\d{6}|8\\d{7,8})',
    'ExampleNumber' => '201234567',
    'PossibleLength' =>
     [
      0 => 8,
      1 => 9,
      2 => 10,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '800\\d{6,7}',
    'ExampleNumber' => '8001234567',
    'PossibleLength' =>
     [
      0 => 9,
      1 => 10,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '900\\d{6,7}',
    'ExampleNumber' => '9001234567',
    'PossibleLength' =>
     [
      0 => 9,
      1 => 10,
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
  'id' => 'NZ',
  'countryCode' => 64,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
    0 =>
     [
      'pattern' => '(\\d)(\\d{3})(\\d{4})',
      'format' => '$1-$2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '24|[34679]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
     [
      'pattern' => '(\\d)(\\d{3})(\\d{3,5})',
      'format' => '$1-$2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '2[179]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
     [
      'pattern' => '(\\d{3})(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '[89]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
