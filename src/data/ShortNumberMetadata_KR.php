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
    'NationalNumberPattern' => '1\\d{2,4}',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:1[27-9]|28|330|82)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
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
    'NationalNumberPattern' => '11[29]',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:[016-9]114|3(?:0[01]|2|3[0-35-9]|45?|5[057]|6[569]|7[79]|8[2589]|9[0189]))|1(?:0[015]|1\\d|2[01357-9]|41|8[28])',
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
    'NationalNumberPattern' => '1(?:0[01]|1[4-6]|41)|1(?:[06-9]1\\d|111)\\d',
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
  'id' => 'KR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
