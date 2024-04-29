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
    'NationalNumberPattern' => '[19]\\d\\d(?:\\d{2})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[235]|1[2-6]|9[127])|911',
    'ExampleNumber' => '102',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '9[0-4689]\\d{3}',
    'ExampleNumber' => '90000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:12|9[127])|911',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[2359]|1[0-68]|9[0-24-79])|9[0-4689]\\d{3}|911',
    'ExampleNumber' => '102',
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
    'NationalNumberPattern' => '9[0-4689]\\d{3}',
    'ExampleNumber' => '90000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '9[0-4689]\\d{3}',
    'ExampleNumber' => '90000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'JO',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
