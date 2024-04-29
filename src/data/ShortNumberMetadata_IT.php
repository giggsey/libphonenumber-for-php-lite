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
    'NationalNumberPattern' => '[14]\\d{2,6}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1(?:[2358]|6\\d{3})|87)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '(?:12|4(?:[478](?:[0-4]|[5-9]\\d\\d)|55))\\d\\d',
    'ExampleNumber' => '1200',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
      2 => 7,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '11[2358]',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0\\d{2,3}|1(?:[2-57-9]|6(?:000|111))|3[39]|4(?:82|9\\d{1,3})|5(?:00|1[58]|2[25]|3[03]|44|[59])|60|8[67]|9(?:[01]|2[2-9]|4\\d|696))|4(?:2323|5045)|(?:1(?:2|92[01])|4(?:3(?:[01]|[45]\\d\\d)|[478](?:[0-4]|[5-9]\\d\\d)|55))\\d\\d',
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
    'NationalNumberPattern' => '4(?:3(?:[01]|[45]\\d\\d)|[478](?:[0-4]|[5-9]\\d\\d)|5[05])\\d\\d',
    'ExampleNumber' => '43000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 7,
    ],
  ],
  'id' => 'IT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
