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
    'NationalNumberPattern' => '9(?:11|9[7-9])',
    'ExampleNumber' => '911',
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
    'NationalNumberPattern' => '9(?:11|9[7-9])',
    'ExampleNumber' => '911',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1[26]|3123)|9(?:1[14]|9[1-57-9])',
    'ExampleNumber' => '112',
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
    'NationalNumberPattern' => '131\\d\\d',
    'ExampleNumber' => '13100',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '131\\d\\d',
    'ExampleNumber' => '13100',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'BW',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
