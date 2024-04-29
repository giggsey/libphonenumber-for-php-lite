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
    'NationalNumberPattern' => '[135]\\d{1,3}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0(?:00|1[23]|3[0-2]|8\\d)|[5-8])|363\\d|577',
    'ExampleNumber' => '15',
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
    'NationalNumberPattern' => '1[5-8]',
    'ExampleNumber' => '15',
    'PossibleLength' =>
     [
      0 => 2,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0(?:0[06]|1[02-46]|20|3[0-25]|42|5[058]|77|88)|[5-8])|3631|5[6-8]\\d',
    'ExampleNumber' => '15',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '5(?:67|88)',
    'ExampleNumber' => '567',
    'PossibleLength' =>
     [
      0 => 3,
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
  'id' => 'NC',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
