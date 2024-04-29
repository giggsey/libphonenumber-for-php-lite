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
    'NationalNumberPattern' => '[1-9]\\d\\d(?:\\d\\d(?:\\d(?:\\d{2})?)?)?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
      2 => 6,
      3 => 8,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '112|988|[29]11',
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
    'NationalNumberPattern' => '112|911',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '112|30000\\d{3}|[1-35-9]\\d{4,5}|[2-8]11|9(?:11|88)',
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
    'NationalNumberPattern' => '[235-7]11',
    'ExampleNumber' => '211',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '300\\d{5}|[1-35-9]\\d{4,5}',
    'ExampleNumber' => '10000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 6,
      2 => 8,
    ],
  ],
  'id' => 'CA',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
