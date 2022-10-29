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
    'NationalNumberPattern' => '[19]\\d\\d',
    'PossibleLength' =>
    [
      0 => 3,
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '112|911',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    [
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
    'NationalNumberPattern' => '112|911',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'shortCode' =>
  [
    'NationalNumberPattern' => '1(?:12|76)|911',
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
    'NationalNumberPattern' => '176',
    'ExampleNumber' => '176',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'smsServices' =>
  [
    'NationalNumberPattern' => '176',
    'ExampleNumber' => '176',
    'PossibleLength' =>
    [
    ],
    'PossibleLengthLocalOnly' =>
    [
    ],
  ],
  'id' => 'BQ',
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
