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
    'NationalNumberPattern' => '1\\d{2,3}',
    'PossibleLength' =>
    [
      0 => 3,
      1 => 4,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '11[24]',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    [
      0 => 3,
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
  'emergency' =>
  [
    'NationalNumberPattern' => '11[24]',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    [
      0 => 3,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'shortCode' =>
  [
    'NationalNumberPattern' => '11[248]|1(?:4[124]|71|8[7-9])\\d',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'standardRate' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'carrierSpecific' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'smsServices' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'id' => 'FO',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
  ],
  'intlNumberFormat' =>
  [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
