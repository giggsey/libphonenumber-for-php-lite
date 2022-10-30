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
    'NationalNumberPattern' => '[1-3689]\\d{9,10}',
    'PossibleLength' =>
    [
      0 => 6,
      1 => 7,
      2 => 8,
      3 => 9,
      4 => 10,
      5 => 11,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '[1-3]\\d{5,9}',
    'ExampleNumber' => '1234567890',
    'PossibleLength' =>
    [
      0 => 6,
      1 => 7,
      2 => 8,
      3 => 9,
      4 => 10,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '9\\d{10}|[1-3]\\d{9}',
    'ExampleNumber' => '9234567890',
    'PossibleLength' =>
    [
      0 => 10,
      1 => 11,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80\\d{8}',
    'ExampleNumber' => '8034567890',
    'PossibleLength' =>
    [
      0 => 10,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '6(0\\d|10)\\d{7}',
    'ExampleNumber' => '6234567890',
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
  'id' => 'AR',
  'countryCode' => 54,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0(?:(11|343|3715)15)?',
  'nationalPrefixTransformRule' => '9$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '11',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{4})(\\d{2})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '1[02-9]|[23]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$2 15 $3-$4',
      'leadingDigitsPatterns' =>
      [
        0 => '911',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d)(\\d{4})(\\d{2})(\\d{4})',
      'format' => '$2 $3-$4',
      'leadingDigitsPatterns' =>
      [
        0 => '9(?:1[02-9]|[23])',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '0$1 $CC',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    4 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '[68]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'intlNumberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '11',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{4})(\\d{2})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '1[02-9]|[23]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d)(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      [
        0 => '911',
      ],
    ],
    3 =>
    [
      'pattern' => '(\\d)(\\d{4})(\\d{2})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      [
        0 => '9(?:1[02-9]|[23])',
      ],
    ],
    4 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' =>
      [
        0 => '[68]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
