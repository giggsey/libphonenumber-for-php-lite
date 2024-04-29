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
    'NationalNumberPattern' => '[01389]\\d{1,4}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
      3 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '000|1(?:0[0-35-7]|1[0245]|2[015]|3[47]|4[478]|9)|911',
    'ExampleNumber' => '19',
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
    'NationalNumberPattern' => '10[017]|911',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '000|1(?:0[0-35-7]|1[02-5]|2[015]|3[47]|4[478]|9)|3372|89338|911',
    'ExampleNumber' => '19',
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
    'NationalNumberPattern' => '893\\d\\d',
    'ExampleNumber' => '89300',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:337|893\\d)\\d',
    'ExampleNumber' => '3370',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'id' => 'AR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
