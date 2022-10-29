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
    'NationalNumberPattern' => '[19]\\d{2,3}',
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
    'NationalNumberPattern' => '128|911',
    'ExampleNumber' => '128',
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
    'NationalNumberPattern' => '128|911',
    'ExampleNumber' => '128',
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
    'NationalNumberPattern' => '1(?:0[4-9]|1[2368]|2[0-3568]|787)|911',
    'ExampleNumber' => '104',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'standardRate' =>
  [
    'NationalNumberPattern' => '178\\d',
    'ExampleNumber' => '1780',
    'PossibleLength' =>
    [
      0 => 4,
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
  'id' => 'UY',
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
