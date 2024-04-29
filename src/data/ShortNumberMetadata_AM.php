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
    'NationalNumberPattern' => '[148]\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '10[1-3]',
    'ExampleNumber' => '101',
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
    'NationalNumberPattern' => '10[1-3]',
    'ExampleNumber' => '101',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '(?:1|8[1-7])\\d\\d|40404',
    'ExampleNumber' => '100',
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
  'id' => 'AM',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
