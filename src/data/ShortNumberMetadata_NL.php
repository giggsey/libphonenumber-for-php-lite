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
    'NationalNumberPattern' => '[1349]\\d\\d(?:\\d(?:\\d{2})?)?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '11(?:2|6\\d{3})|911',
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
    'NationalNumberPattern' => '112|911',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:2|6(?:00[06]|1(?:11|23)))|2(?:0[0-4]|3[34]|44)|3[03-9]\\d|400|8(?:[02-9]\\d|1[0-79]))|[34]000|911',
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
    'NationalNumberPattern' => '120\\d',
    'ExampleNumber' => '1200',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '[34]00\\d',
    'ExampleNumber' => '3000',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'NL',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
