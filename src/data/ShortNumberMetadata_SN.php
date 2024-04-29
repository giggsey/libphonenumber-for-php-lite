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
    'NationalNumberPattern' => '[12]\\d{1,5}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
      3 => 5,
      4 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:515|[78])|2(?:00|1)\\d{3}',
    'ExampleNumber' => '17',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 4,
      2 => 5,
      3 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '2(?:0[246]|[468])\\d{3}',
    'ExampleNumber' => '24000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 6,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1[78]',
    'ExampleNumber' => '17',
    'PossibleLength' =>
     [
      0 => 2,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1[69]|(?:[246]\\d|51)\\d)|2(?:0[0-246]|[12468])\\d{3}|1[278]',
    'ExampleNumber' => '12',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '2(?:01|2)\\d{3}',
    'ExampleNumber' => '22000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 6,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '1[46]\\d\\d',
    'ExampleNumber' => '1400',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '2[468]\\d{3}',
    'ExampleNumber' => '24000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'SN',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
