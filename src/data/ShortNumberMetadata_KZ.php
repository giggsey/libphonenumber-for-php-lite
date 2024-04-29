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
    'NationalNumberPattern' => '[1-4]\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[1-3]|12)|212\\d',
    'ExampleNumber' => '101',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
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
    'NationalNumberPattern' => '1(?:0[1-4]|12)|2121|(?:3040|404)0',
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
    'NationalNumberPattern' => '(?:304\\d|404)\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:304\\d|404)\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'id' => 'KZ',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
