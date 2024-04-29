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
    'NationalNumberPattern' => '[189]\\d{2,5}',
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
    'NationalNumberPattern' => '1(?:0[1-3]|1(?:2|6\\d{3}))',
    'ExampleNumber' => '101',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
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
    'NationalNumberPattern' => '1(?:0[1-3]|12)',
    'ExampleNumber' => '101',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[1-49]|1(?:2|6(?:000|1(?:11|23))|8\\d\\d?)|(?:[278]|5\\d)\\d)|[89]00\\d\\d?|151|1(?:06|4\\d|6)\\d\\d',
    'ExampleNumber' => '101',
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
    'NationalNumberPattern' => '(?:118|[89]00)\\d\\d?',
    'ExampleNumber' => '1180',
    'PossibleLength' =>
     [
      0 => 4,
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
  'id' => 'UA',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
