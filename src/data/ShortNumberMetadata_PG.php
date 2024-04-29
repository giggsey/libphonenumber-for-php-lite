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
    'NationalNumberPattern' => '[01]\\d{2,6}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '000|11[01]',
    'ExampleNumber' => '000',
    'PossibleLength' =>
     [
      0 => 3,
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
    'NationalNumberPattern' => '000|11[01]',
    'ExampleNumber' => '000',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '000|1(?:1[01]|5\\d\\d|6\\d{2,5})',
    'ExampleNumber' => '000',
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
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '16\\d{2,5}',
    'ExampleNumber' => '1600',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
    ],
  ],
  'id' => 'PG',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
