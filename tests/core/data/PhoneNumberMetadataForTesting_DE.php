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
    'NationalNumberPattern' => '\\d{4,14}',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
      5 => 9,
      6 => 10,
      7 => 11,
    ],
    'PossibleLengthLocalOnly' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'fixedLine' =>
   [
    'NationalNumberPattern' => '(?:[24-6]\\d{2}|3[03-9]\\d|[789](?:0[2-9]|[1-9]\\d))\\d{1,8}',
    'ExampleNumber' => '30123456',
    'PossibleLengthLocalOnly' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'mobile' =>
   [
    'NationalNumberPattern' => '1(5\\d{9}|7\\d{8}|6[02]\\d{8}|63\\d{7})',
    'ExampleNumber' => '15123456789',
    'PossibleLength' =>
     [
      0 => 10,
      1 => 11,
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
    'NationalNumberPattern' => '900([135]\\d{6}|9\\d{7})',
    'ExampleNumber' => '9001234567',
    'PossibleLength' =>
     [
      0 => 10,
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
  'id' => 'DE',
  'countryCode' => 49,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
    0 =>
     [
      'pattern' => '(\\d{3})(\\d{3,8})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
       [
        0 => '2|3[3-9]|906|[4-9][1-9]1',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
     [
      'pattern' => '(\\d{2})(\\d{4,11})',
      'format' => '$1/$2',
      'leadingDigitsPatterns' =>
       [
        0 => '[34]0|[68]9',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
     [
      'pattern' => '(\\d{2})(\\d{2})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
       [
        0 => '[4-9]',
        1 => '[4-6]|[7-9](?:\\d[1-9]|[1-9]\\d)',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
     [
      'pattern' => '(\\d{4})(\\d{2,7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
       [
        0 => '[4-9]',
        1 => '[4-6]|[7-9](?:\\d[1-9]|[1-9]\\d)',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    4 =>
     [
      'pattern' => '(\\d{3})(\\d{1})(\\d{6})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '800',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    5 =>
     [
      'pattern' => '(\\d{3})(\\d{3,4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
       [
        0 => '900',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
