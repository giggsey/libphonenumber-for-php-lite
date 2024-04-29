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
    'NationalNumberPattern' => '[1-589]\\d\\d(?:\\d{2,3})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1[29]|23|32|56)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
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
    'NationalNumberPattern' => '1(?:1[29]|23|32|56)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:06|1[2-9]|2[35-7]|3[27]|4[467]|5[36]|6[4-7]|95)|(?:29002|39003)9|40404|5930\\d\\d|85432|(?:[2359][57]|8(?:7|9\\d))\\d{3}',
    'ExampleNumber' => '106',
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
    'NationalNumberPattern' => '(?:40|85)4\\d\\d',
    'ExampleNumber' => '40400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:40|85)4\\d\\d',
    'ExampleNumber' => '40400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'CO',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
