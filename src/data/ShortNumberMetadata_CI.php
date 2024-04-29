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
    'NationalNumberPattern' => '[14]\\d{2,3}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1[01]|[78]0)',
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
    'NationalNumberPattern' => '1(?:1[01]|[78]0)',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1[01]|[78]0)|4443',
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
    'NationalNumberPattern' => '444\\d',
    'ExampleNumber' => '4440',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '444\\d',
    'ExampleNumber' => '4440',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'CI',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
