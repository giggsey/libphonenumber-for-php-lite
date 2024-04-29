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
    'NationalNumberPattern' => '[1-3578]\\d(?:\\d(?:\\d{3})?)?',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:18|[578])|723\\d{3}',
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
    'NationalNumberPattern' => '1(?:18|[578])|723141',
    'ExampleNumber' => '15',
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[01]|1[128]|2[034]|3[013]|[46]0|55?|[78])|222|333|555|723141|888',
    'ExampleNumber' => '15',
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
    'NationalNumberPattern' => '1(?:0[01]|1[12]|2[034]|3[013]|[46]0|55)|222|333|555|888',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'smsServices' =>
   [
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'NE',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
