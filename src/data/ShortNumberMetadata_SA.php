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
    'NationalNumberPattern' => '[19]\\d{2,5}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '11(?:2|6\\d{3})|9(?:11|37|9[7-9])',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
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
    'NationalNumberPattern' => '112|9(?:11|9[79])',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:00|2|6111)|410|9(?:00|1[89]|9(?:099|22|9[0-3])))|9(?:0[24-79]|11|3[379]|40|66|8[5-9]|9[02-9])',
    'ExampleNumber' => '112',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '141\\d',
    'ExampleNumber' => '1410',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '1(?:10|41)\\d|90[24679]',
    'ExampleNumber' => '902',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'SA',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
