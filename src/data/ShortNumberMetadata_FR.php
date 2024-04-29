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
    'NationalNumberPattern' => '[1-8]\\d{1,5}',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
      2 => 4,
      3 => 5,
      4 => 6,
    ],
  ],
  'tollFree' =>
   [
    'NationalNumberPattern' => '1(?:0(?:07|[13]3)|1[02459]|[578]|9[167])|224|(?:3370|74)0|(?:116\\d|3[01])\\d\\d',
    'ExampleNumber' => '15',
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '366\\d\\d|3[2-9]\\d\\d|(?:118|[4-8]\\d)\\d{3}',
    'ExampleNumber' => '3200',
    'PossibleLength' =>
     [
      0 => 4,
      1 => 5,
      2 => 6,
    ],
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '1(?:12|[578])',
    'ExampleNumber' => '15',
    'PossibleLength' =>
     [
      0 => 2,
      1 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '1(?:0\\d\\d|1(?:[02459]|6(?:000|111)|8\\d{3})|[578]|9[167])|2(?:0(?:00|2)0|24)|[3-8]\\d{4}|3\\d{3}|6(?:1[14]|34)|7(?:0[06]|22|40)',
    'ExampleNumber' => '15',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '10(?:[134]4|2[23]|5\\d|99)|202\\d|634|70[06]|(?:106|61)[14]',
    'ExampleNumber' => '611',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '118777|224|6(?:1[14]|34)|7(?:0[06]|22|40)|20(?:0\\d|2)\\d',
    'ExampleNumber' => '224',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
    ],
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '114|[3-8]\\d{4}',
    'ExampleNumber' => '114',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 5,
    ],
  ],
  'id' => 'FR',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
