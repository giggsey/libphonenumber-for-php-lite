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
    'NationalNumberPattern' => '1\\d\\d(?:\\d{2,3})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0[089]|1(?:2|6\\d{3})|66|99)',
    'ExampleNumber' => '100',
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
    'NationalNumberPattern' => '1(?:00|12|66|99)',
    'ExampleNumber' => '100',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[089]|1(?:2|320|6(?:000|1(?:1[17]|23)))|(?:389|9)9|66)',
    'ExampleNumber' => '100',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '113\\d\\d',
    'ExampleNumber' => '11300',
    'PossibleLength' =>
     [
      0 => 5,
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
  'id' => 'GR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
