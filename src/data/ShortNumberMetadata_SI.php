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
    'NationalNumberPattern' => '1\\d{2,5}',
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
    'NationalNumberPattern' => '11(?:(?:0|6\\d)\\d\\d|[23]|8\\d\\d?)',
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
    'NationalNumberPattern' => '11[23]',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:00[146]|[23]|6(?:000|1(?:11|23))|8(?:[08]|99))|9(?:059|1(?:0[12]|16)|5|70|87|9(?:00|[149])))|19(?:08|81)[09]',
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
    'PossibleLength' =>
     [
      0 => -1,
    ],
  ],
  'id' => 'SI',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
