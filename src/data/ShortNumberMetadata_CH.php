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
    'NationalNumberPattern' => '[1-9]\\d{2,5}',
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
    'NationalNumberPattern' => '1(?:1(?:[278]|6\\d{3})|4[47])|5200',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '1(?:14|8[0-2589])\\d|543|83111',
    'ExampleNumber' => '543',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:1[278]|44)',
    'ExampleNumber' => '112',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0[78]\\d\\d|1(?:[278]|45|6(?:000|111))|4(?:[03-57]|1[0145])|6(?:00|[1-46])|8(?:02|1[189]|[25]0|7|8[08]|99))|[2-9]\\d{2,4}',
    'ExampleNumber' => '112',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '1(?:4[035]|6[1-46])|1(?:41|60)\\d',
    'ExampleNumber' => '140',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '5(?:200|35)',
    'ExampleNumber' => '535',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '[2-9]\\d{2,4}',
    'ExampleNumber' => '200',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
    ],
  ],
  'id' => 'CH',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
