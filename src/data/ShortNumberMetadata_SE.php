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
    'NationalNumberPattern' => '[1-37-9]\\d{2,5}',
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
    'NationalNumberPattern' => '11(?:2|(?:3|6\\d)\\d\\d|414|77)|900\\d\\d',
    'ExampleNumber' => '112',
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '11811[89]|72\\d{3}',
    'ExampleNumber' => '72000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 6,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '112|90000',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '11(?:[25]|313|6(?:00[06]|1(?:1[17]|23))|7[0-8])|2(?:2[02358]|33|4[01]|50|6[1-4])|32[13]|8(?:22|88)|9(?:0(?:00|51)0|12)|(?:11(?:4|8[02-46-9])|7\\d\\d|90[2-4])\\d\\d|(?:118|90)1(?:[02-9]\\d|1[013-9])',
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
    'NationalNumberPattern' => '2(?:2[02358]|33|4[01]|50|6[1-4])|32[13]|8(?:22|88)|912',
    'ExampleNumber' => '220',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '7\\d{4}',
    'ExampleNumber' => '70000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'SE',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
