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
    'NationalNumberPattern' => '[158]\\d{2,5}',
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
    'NationalNumberPattern' => '1(?:00|1[25]|23|4(?:1|7\\d)|5[15]|9[02-49])|555|(?:116\\d|80)\\d\\d',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '8[1-69]\\d\\d',
    'ExampleNumber' => '8100',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:12|9[09])',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:00|1(?:[25]|6(?:00[06]|1(?:1[17]|23))|8\\d\\d)|23|4(?:1|7[014])|5[015]|9[02-49])|555|8[0-79]\\d\\d|8(?:00|4[0-2]|8[0-589])',
    'ExampleNumber' => '100',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '150|87\\d\\d',
    'ExampleNumber' => '150',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '1(?:00|1(?:5|8\\d\\d)|23|51|9[2-4])|555|8(?:00|4[0-2]|8[0-589])',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'GI',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
