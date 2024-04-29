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
    'NationalNumberPattern' => '[18]\\d{1,3}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1[37]|[37])',
    'ExampleNumber' => '13',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'premiumRate' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:1[37]|[37])',
    'ExampleNumber' => '13',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1[37]|[37])|8711',
    'ExampleNumber' => '13',
  ],
  'standardRate' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '871\\d',
    'ExampleNumber' => '8710',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '871\\d',
    'ExampleNumber' => '8710',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'CM',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
