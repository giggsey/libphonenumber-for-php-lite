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
    'NationalNumberPattern' => '[168]\\d\\d(?:\\d(?:\\d{2})?)?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:12|2[0238]|3[03]|4[0-247])|1(?:16\\d\\d|4[58])\\d',
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
    'NationalNumberPattern' => '1(?:[12]2|33|44)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:2|6(?:00[06]|1(?:17|23)))|2[0238]|3[03]|4(?:[0-247]|5[05]|84))|(?:61|8108[1-3])0',
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
    'NationalNumberPattern' => '610|810\\d{3}',
    'ExampleNumber' => '610',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'AT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
