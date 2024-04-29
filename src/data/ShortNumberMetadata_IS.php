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
    'NationalNumberPattern' => '1\\d\\d(?:\\d(?:\\d{2})?)?',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:12|71\\d)',
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
    'NationalNumberPattern' => '112',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:1(?:[28]|61(?:16|23))|4(?:00|1[145]|4[0146])|55|7(?:00|17|7[07-9])|8(?:[02]0|1[16-9]|88)|900)',
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
    'NationalNumberPattern' => '14(?:0\\d|41)',
    'ExampleNumber' => '1400',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '1(?:415|90\\d)',
    'ExampleNumber' => '1415',
    'PossibleLength' =>
     [
      0 => 4,
    ],
  ],
  'id' => 'IS',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
