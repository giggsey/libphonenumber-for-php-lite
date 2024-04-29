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
    'NationalNumberPattern' => '[3489]\\d{2,3}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '355|911',
    'ExampleNumber' => '355',
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
    'NationalNumberPattern' => '355|911',
    'ExampleNumber' => '355',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '355|4040|8(?:400|933)|911',
    'ExampleNumber' => '355',
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
    'NationalNumberPattern' => '(?:404|8(?:40|93))\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:404|8(?:40|93))\\d',
    'ExampleNumber' => '4040',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'LR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
