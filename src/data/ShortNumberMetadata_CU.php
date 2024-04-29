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
    'NationalNumberPattern' => '[12]\\d\\d(?:\\d{3,4})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
      2 => 7,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '10[4-7]|(?:116|204\\d)\\d{3}',
    'ExampleNumber' => '104',
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
    'NationalNumberPattern' => '10[4-6]',
    'ExampleNumber' => '104',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[4-7]|1(?:6111|8)|40)|2045252',
    'ExampleNumber' => '104',
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
  'id' => 'CU',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
