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
    'NationalNumberPattern' => '[1-9]\\d{9,10}',
    'PossibleLength' =>
     [
      0 => 10,
      1 => 11,
    ],
    'PossibleLengthLocalOnly' =>
     [
      0 => 7,
    ],
  ],
  'fixedLine' =>
   [
    'NationalNumberPattern' => '[2-9]\\d{9}',
    'ExampleNumber' => '2123456789',
    'PossibleLength' =>
     [
      0 => 10,
    ],
    'PossibleLengthLocalOnly' =>
     [
      0 => 7,
    ],
  ],
  'mobile' =>
   [
    'NationalNumberPattern' => '1\\d{10}',
    'ExampleNumber' => '11234567890',
    'PossibleLength' =>
     [
      0 => 11,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '800\\d{7}',
    'ExampleNumber' => '8001234567',
    'PossibleLength' =>
     [
      0 => 10,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '900\\d{7}',
    'ExampleNumber' => '9001234567',
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
  'id' => 'MX',
  'countryCode' => 52,
  'internationalPrefix' => '00',
  'nationalPrefix' => '01',
  'nationalPrefixForParsing' => '01|04[45](\\d{10})',
  'nationalPrefixTransformRule' => '1$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
    0 =>
     [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '[89]00',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    1 =>
     [
      'pattern' => '(\\d{3})(\\d{2})(\\d{5})',
      'format' => '$2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '901',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    2 =>
     [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '33|55|81',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    3 =>
     [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '[2467]|3[0-24-9]|5[0-46-9]|8[2-9]|9[1-9]',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    4 =>
     [
      'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
      'format' => '045 $2 $3 $4',
      'leadingDigitsPatterns' =>
       [
        0 => '1(?:33|55|81)',
      ],
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    5 =>
     [
      'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{4})',
      'format' => '045 $2 $3 $4',
      'leadingDigitsPatterns' =>
       [
        0 => '1(?:[124579]|3[0-24-9]|5[0-46-9]|8[02-9])',
      ],
      'nationalPrefixFormattingRule' => '$1',
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
        0 => '[89]00',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    1 =>
     [
      'pattern' => '(\\d{3})(\\d{2})(\\d{5})',
      'format' => '$2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '901',
      ],
    ],
    2 =>
     [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '33|55|81',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    3 =>
     [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '[2467]|3[0-24-9]|5[0-46-9]|8[2-9]|9[1-9]',
      ],
      'nationalPrefixFormattingRule' => '01 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => true,
    ],
    4 =>
     [
      'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
       [
        0 => '1(?:33|55|81)',
      ],
    ],
    5 =>
     [
      'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
       [
        0 => '1(?:[124579]|3[0-24-9]|5[0-46-9]|8[02-9])',
      ],
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
