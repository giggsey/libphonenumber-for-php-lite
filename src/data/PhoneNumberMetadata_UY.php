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
    'NationalNumberPattern' => '(?:0004|4)\\d{9}|[1249]\\d{7}|(?:[49]\\d|80)\\d{5}',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 8,
      2 => 10,
      3 => 13,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '(?:1(?:770|987)|(?:2\\d|4[2-7])\\d\\d)\\d{4}',
    'ExampleNumber' => '21231234',
    'PossibleLength' =>
    [
      0 => 8,
    ],
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '9[1-9]\\d{6}',
    'ExampleNumber' => '94231234',
    'PossibleLength' =>
    [
      0 => 8,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '(?:(?:0004|4)\\d{5}|80[05])\\d{4}|405\\d{4}',
    'ExampleNumber' => '8001234',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 10,
      2 => 13,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '90[0-8]\\d{4}',
    'ExampleNumber' => '9001234',
    'PossibleLength' =>
    [
      0 => 7,
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
  'id' => 'UY',
  'countryCode' => 598,
  'internationalPrefix' => '0(?:0|1[3-9]\\d)',
  'preferredInternationalPrefix' => '00',
  'nationalPrefix' => '0',
  'preferredExtnPrefix' => ' int. ',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '405|8|90',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '9',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '[124]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '4',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    4 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      [
        0 => '0',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
