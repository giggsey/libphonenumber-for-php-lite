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
    'NationalNumberPattern' => '[1-46-9]\\d{2,5}',
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
    'NationalNumberPattern' => '1(?:05|1(?:[29]|6\\d{3})|7[56]\\d|8000)|2(?:20\\d|48)|4444|999',
    'ExampleNumber' => '105',
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
    'NationalNumberPattern' => '112|999',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[015]|1(?:[129]|6(?:000|1(?:11|23))|8\\d{3})|2(?:[1-3]|50)|33|4(?:1|7\\d)|571|7(?:0\\d|[56]0)|800\\d|9[15])|2(?:0202|1300|2(?:02|11)|3(?:02|336|45)|4(?:25|8))|3[13]3|4(?:0[02]|35[01]|44[45]|5\\d)|(?:[68]\\d|7[089])\\d{3}|15\\d|2[02]2|650|789|9(?:01|99)',
    'ExampleNumber' => '100',
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
    'NationalNumberPattern' => '1(?:(?:25|7[56])\\d|571)|2(?:02(?:\\d{2})?|[13]3\\d\\d|48)|4444|901',
    'ExampleNumber' => '202',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:125|2(?:020|13\\d)|(?:7[089]|8[01])\\d\\d)\\d',
    'ExampleNumber' => '1250',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
    ],
  ],
  'id' => 'GB',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
