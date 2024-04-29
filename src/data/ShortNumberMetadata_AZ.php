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
    'NationalNumberPattern' => '[148]\\d{2,3}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[1-3]|12)',
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
    'NationalNumberPattern' => '1(?:0[1-3]|12)',
    'ExampleNumber' => '101',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[1-3]|12)|(?:404|880)0',
    'ExampleNumber' => '101',
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
    'NationalNumberPattern' => '(?:404|880)\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:404|880)\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'AZ',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
