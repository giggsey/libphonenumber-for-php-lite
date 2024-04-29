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
    'NationalNumberPattern' => '[12]\\d\\d(?:\\d{3})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '11[2-46]|(?:12[47]|20[12])\\d{3}',
    'ExampleNumber' => '112',
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
    'NationalNumberPattern' => '1(?:1[2-46]|24422)|20(?:1(?:606|917)|2914)|(?:1277|2020)99',
    'ExampleNumber' => '112',
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1[2-6]|24422)|20(?:1(?:606|917)|2914)|(?:1277|2020)99',
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
  'id' => 'ER',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
