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
    'NationalNumberPattern' => '[0-27]\\d{2,7}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
      5 => 8,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '000|1(?:06|12|258885|55\\d)|733',
    'ExampleNumber' => '000',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 7,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '1(?:2(?:34|456)|9\\d{4,6})',
    'ExampleNumber' => '1234',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '000|1(?:06|12)',
    'ExampleNumber' => '000',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '000|1(?:06|1(?:00|2|9[46])|2(?:014[1-3]|[23]\\d|(?:4|5\\d)\\d{2,3}|68[689]|72(?:20|3\\d\\d)|8(?:[013-9]\\d|2))|555|9\\d{4,6})|225|7(?:33|67)',
    'ExampleNumber' => '000',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '1(?:1[09]\\d|24733)|225|767',
    'ExampleNumber' => '225',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '1(?:258885|55\\d)',
    'ExampleNumber' => '1550',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 7,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '19\\d{4,6}',
    'ExampleNumber' => '190000',
    'PossibleLength' =>
     [
      0 => 6,
      1 => 7,
      2 => 8,
    ],
  ],
  'id' => 'AU',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
