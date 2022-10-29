<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return [
  'generalDesc' =>
  [
    'NationalNumberPattern' => '(?:60|3\\d)\\d{8}',
    'PossibleLength' =>
    [
      0 => 10,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '60\\d{8}',
    'ExampleNumber' => '6012345678',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '3(?:0[0-5]|1\\d|2[0-3]|5[01]|70)\\d{7}',
    'ExampleNumber' => '3211234567',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'tollFree' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'premiumRate' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'sharedCost' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'personalNumber' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'voip' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'pager' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'uan' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'voicemail' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'noInternationalDialling' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'id' => 'CO',
  'countryCode' => 57,
  'internationalPrefix' => '',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0(4(?:[14]4|56)|[579])?',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{3})(\\d{7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '6',
      ],
      'nationalPrefixFormattingRule' => '($1)',
      'domesticCarrierCodeFormattingRule' => '0$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{3})(\\d{7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '3',
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '0$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'intlNumberFormat' =>
  [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
];
