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
    'NationalNumberPattern' => '[13]\\d{6}(?:\\d{2,5})?|(?:285|50\\d)\\d{9}|(?:[19]\\d|49)\\d{6}',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 8,
      2 => 9,
      3 => 10,
      4 => 11,
      5 => 12,
    ],
  ],
  'fixedLine' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '342\\d{4}|(?:337|49)\\d{6}|(?:3(?:2|47|7\\d{3})|50\\d{3})\\d{7}',
    'ExampleNumber' => '3421234',
    'PossibleLength' =>
    [
      0 => 7,
      1 => 8,
      2 => 9,
      3 => 10,
      4 => 12,
    ],
  ],
  'tollFree' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'premiumRate' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
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
    'NationalNumberPattern' => '1(?:3(?:0[0347]|[13][0139]|2[035]|4[013568]|6[0459]|7[06]|8[15-8]|9[0689])\\d{4}|6\\d{5,10})|(?:(?:285\\d\\d|3(?:45|[69]\\d{3}))\\d|9[89])\\d{6}',
    'ExampleNumber' => '390123456789',
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
    'NationalNumberPattern' => '348[57]\\d{7}',
    'ExampleNumber' => '34851234567',
    'PossibleLength' =>
    [
      0 => 11,
    ],
  ],
  'noInternationalDialling' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'id' => '001',
  'countryCode' => 882,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '16|342',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{2})(\\d{6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '4',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{2})(\\d{2})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[19]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '3[23]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    4 =>
    [
      'pattern' => '(\\d{2})(\\d{3,4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '1',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    5 =>
    [
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '34[57]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    6 =>
    [
      'pattern' => '(\\d{3})(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '34',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    7 =>
    [
      'pattern' => '(\\d{2})(\\d{4,5})(\\d{5})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[1-35]',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
