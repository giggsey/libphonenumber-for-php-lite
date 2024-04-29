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
    'NationalNumberPattern' => '[19]\\d{1,5}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
      3 => 5,
      4 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:12|9[2-4])|9[34]|1(?:16\\d|39)\\d\\d',
    'ExampleNumber' => '93',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 5,
      3 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '118\\d\\d',
    'ExampleNumber' => '11800',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:12|9[2-4])|9[34]',
    'ExampleNumber' => '93',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:2|6(?:00[06]|1(?:1[17]|23))|8\\d\\d)|3977|9(?:[2-5]|87))|9[34]',
    'ExampleNumber' => '93',
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
    'NationalNumberPattern' => '139\\d\\d',
    'ExampleNumber' => '13900',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '139\\d\\d',
    'ExampleNumber' => '13900',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'HR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
