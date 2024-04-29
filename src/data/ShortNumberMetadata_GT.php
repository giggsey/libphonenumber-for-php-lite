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
    'NationalNumberPattern' => '[14]\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:10|2[03])',
    'ExampleNumber' => '110',
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
    'NationalNumberPattern' => '1(?:10|2[03])',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '110|40404|1(?:2|[57]\\d)\\d',
    'ExampleNumber' => '110',
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
    'NationalNumberPattern' => '404\\d\\d',
    'ExampleNumber' => '40400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '404\\d\\d',
    'ExampleNumber' => '40400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'GT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
