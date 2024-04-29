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
    'NationalNumberPattern' => '[189]\\d\\d(?:\\d{2})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '199|99[7-9]',
    'ExampleNumber' => '199',
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
    'NationalNumberPattern' => '199|99[7-9]',
    'ExampleNumber' => '199',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '199|80400|99[7-9]',
    'ExampleNumber' => '199',
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
    'NationalNumberPattern' => '804\\d\\d',
    'ExampleNumber' => '80400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '804\\d\\d',
    'ExampleNumber' => '80400',
    'PossibleLength' =>
     [
      0 => 5,
    ],
  ],
  'id' => 'MW',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
