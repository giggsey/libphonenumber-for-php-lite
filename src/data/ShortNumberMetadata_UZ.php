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
    'NationalNumberPattern' => '[04]\\d(?:\\d(?:\\d{2})?)?',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '0(?:0[1-3]|[1-3]|50)',
    'ExampleNumber' => '01',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
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
    'NationalNumberPattern' => '0(?:0[1-3]|[1-3]|50)',
    'ExampleNumber' => '01',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '0(?:0[1-3]|[1-3]|50)|45400',
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
    'NationalNumberPattern' => '454\\d\\d',
    'ExampleNumber' => '45400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '454\\d\\d',
    'ExampleNumber' => '45400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'UZ',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
