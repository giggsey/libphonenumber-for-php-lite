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
    'NationalNumberPattern' => '[17]\\d{2,3}',
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
    'NationalNumberPattern' => '11[78]|7[3-5]\\d\\d',
    'ExampleNumber' => '117',
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
    'NationalNumberPattern' => '11[78]',
    'ExampleNumber' => '117',
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
    'NationalNumberPattern' => '1(?:1[78]|2[02-5]|60)|7[0-5]\\d\\d',
    'ExampleNumber' => '117',
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
    'NationalNumberPattern' => '12[02-5]',
    'ExampleNumber' => '120',
    'PossibleLength' =>
    [
      0 => 3,
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
  'id' => 'BJ',
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
