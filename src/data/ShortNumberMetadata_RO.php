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
    'NationalNumberPattern' => '[18]\\d{2,5}',
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
    'NationalNumberPattern' => '11(?:2|6\\d{3})',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '(?:1(?:18[39]|[24])|8[48])\\d\\d',
    'ExampleNumber' => '1200',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 6,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '112',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:2|6(?:000|1(?:11|23))|8(?:(?:01|8[18])1|119|[23]00|932))|[24]\\d\\d|9(?:0(?:00|19)|1[19]|21|3[02]|5[178]))|8[48]\\d\\d',
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
    'NationalNumberPattern' => '(?:1[24]|8[48])\\d\\d',
    'ExampleNumber' => '1200',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'RO',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
