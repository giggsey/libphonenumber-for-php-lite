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
    'NationalNumberPattern' => '\\d{9}',
    'PossibleLength' =>
    [
      0 => 9,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'fixedLine' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '\\d{9}',
    'ExampleNumber' => '123456789',
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
  'id' => '001',
  'countryCode' => 882,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d)(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
      ],
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'intlNumberFormat' =>
  [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
