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
    'NationalNumberPattern' => '[14589]\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '19[1-3]|999',
    'ExampleNumber' => '191',
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
    'NationalNumberPattern' => '19[1-3]|999',
    'ExampleNumber' => '191',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '19[1-3]|40404|(?:54|83)00|999',
    'ExampleNumber' => '191',
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
    'NationalNumberPattern' => '404\\d\\d|(?:54|83)0\\d',
    'ExampleNumber' => '5400',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '404\\d\\d|(?:54|83)0\\d',
    'ExampleNumber' => '5400',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'id' => 'GH',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
