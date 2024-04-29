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
    'NationalNumberPattern' => '[159]\\d{2,5}',
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
    'NationalNumberPattern' => '11(?:2|6\\d{3})|999',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '5[37]\\d{3}',
    'ExampleNumber' => '53000',
    'PossibleLength' =>
     [
      0 => 5,
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
    'NationalNumberPattern' => '11(?:2|6(?:00[06]|1(?:1[17]|23)))|999|(?:1(?:18|9)|5[0137]\\d)\\d\\d',
    'ExampleNumber' => '112',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '51\\d{3}',
    'ExampleNumber' => '51000',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '51210',
    'ExampleNumber' => '51210',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '51210|(?:118|5[037]\\d)\\d\\d',
    'ExampleNumber' => '11800',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'IE',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
