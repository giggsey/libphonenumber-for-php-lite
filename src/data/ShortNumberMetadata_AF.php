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
    'NationalNumberPattern' => '[14]\\d\\d(?:\\d{2})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[02]|19)',
    'ExampleNumber' => '100',
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
    'NationalNumberPattern' => '1(?:0[02]|19)',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[02]|19)|40404',
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
  'id' => 'AF',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
