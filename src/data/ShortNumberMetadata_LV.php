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
    'NationalNumberPattern' => '[018]\\d{1,5}',
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
    'NationalNumberPattern' => '0[1-3]|11(?:[023]|6\\d{3})',
    'ExampleNumber' => '01',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '1180|821\\d\\d',
    'ExampleNumber' => '1180',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '0[1-3]|11[023]',
    'ExampleNumber' => '01',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '0[1-4]|1(?:1(?:[02-4]|6(?:000|111)|8[0189])|(?:5|65)5|77)|821[57]4',
    'ExampleNumber' => '01',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '1181',
    'ExampleNumber' => '1181',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '165\\d',
    'ExampleNumber' => '1650',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'LV',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
