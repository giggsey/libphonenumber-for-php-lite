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
    'NationalNumberPattern' => '1\\d{2,3}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '11[0289]|1(?:81|92)\\d',
    'ExampleNumber' => '110',
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '10[56]',
    'ExampleNumber' => '105',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '11[029]',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[04-6]|1[0237-9]|3[389]|6[05-8]|7[07]|8(?:0|11)|9(?:19|22|5[057]|68|8[05]|9[15689]))',
    'ExampleNumber' => '100',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '1(?:65|9(?:1\\d|50|85|98))',
    'ExampleNumber' => '165',
  ],
  'carrierSpecific' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'TW',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
