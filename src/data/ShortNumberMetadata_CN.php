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
    'NationalNumberPattern' => '[19]\\d\\d(?:\\d{2,3})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1[09]|2(?:[02]|[13]\\d\\d))',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
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
    'NationalNumberPattern' => '1(?:1[09]|20)',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:00\\d\\d|1[029]|2(?:[02]|110|395))|95\\d{3,4}',
    'ExampleNumber' => '110',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '1(?:00\\d\\d|12)|95\\d{3,4}',
    'ExampleNumber' => '112',
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
    'NationalNumberPattern' => '121\\d\\d',
    'ExampleNumber' => '12100',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'CN',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
