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
    'NationalNumberPattern' => '[01]\\d\\d(?:\\d{7})?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 10,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '11[089]',
    'ExampleNumber' => '110',
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
    'NationalNumberPattern' => '11[09]',
    'ExampleNumber' => '110',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '000[259]\\d{6}|1(?:0[24]|1[089]|44|89)',
    'ExampleNumber' => '102',
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
    'NationalNumberPattern' => '000[259]\\d{6}',
    'ExampleNumber' => '0002000000',
    'PossibleLength' =>
     [
      0 => 10,
    ],
  ],
  'id' => 'JP',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
