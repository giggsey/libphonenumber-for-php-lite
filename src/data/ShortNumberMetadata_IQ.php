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
    'NationalNumberPattern' => '[1479]\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[04]|15|22)',
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
    'NationalNumberPattern' => '1(?:0[04]|15|22)',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[04]|15|22)|4432|71117|9988',
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
    'NationalNumberPattern' => '(?:443|711\\d|998)\\d',
    'ExampleNumber' => '4430',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:443|711\\d|998)\\d',
    'ExampleNumber' => '4430',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'id' => 'IQ',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
