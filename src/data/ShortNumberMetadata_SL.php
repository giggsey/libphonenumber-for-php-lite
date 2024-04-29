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
    'NationalNumberPattern' => '[069]\\d\\d(?:\\d{2})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '(?:01|99)9',
    'ExampleNumber' => '019',
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
    'NationalNumberPattern' => '(?:01|99)9',
    'ExampleNumber' => '019',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '(?:01|99)9|60400',
    'ExampleNumber' => '019',
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
    'NationalNumberPattern' => '604\\d\\d',
    'ExampleNumber' => '60400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '604\\d\\d',
    'ExampleNumber' => '60400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'SL',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
