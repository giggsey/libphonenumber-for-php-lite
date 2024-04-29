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
    'NationalNumberPattern' => '[01]\\d(?:\\d(?:\\d{3})?)?',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '0(?:11?|22?|33?)|1(?:0[1-3]|1(?:2|6111))|116(?:0\\d|12)\\d',
    'ExampleNumber' => '01',
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
    'NationalNumberPattern' => '0(?:11?|22?|33?)|1(?:0[1-3]|12)',
    'ExampleNumber' => '01',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '0(?:11?|22?|33?)|1(?:0[1-3]|1(?:[27-9]|6(?:000|1(?:1[17]|23))))',
    'ExampleNumber' => '01',
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
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'LT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
