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
    'NationalNumberPattern' => '[0-379]\\d{2,5}',
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
    'NationalNumberPattern' => '0(?:16|6[57]|8[58])|1(?:006|12|[3-7]\\d\\d)|(?:116|20\\d)\\d{3}',
    'ExampleNumber' => '016',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 4,
      2 => 6,
    ],
  ],
  'premiumRate' =>
   [
    'NationalNumberPattern' => '[12]2\\d{1,4}|90(?:5\\d|7)|(?:118|2(?:[357]\\d|80)|3[357]\\d)\\d\\d|[79]9[57]\\d{3}',
    'ExampleNumber' => '120',
  ],
  'emergency' =>
   [
    'NationalNumberPattern' => '08[58]|112',
    'ExampleNumber' => '085',
    'PossibleLength' =>
     [
      0 => 3,
    ],
  ],
  'shortCode' =>
   [
    'NationalNumberPattern' => '0(?:1[0-26]|6[0-257]|8[058]|9[12])|1(?:0[03-57]\\d{1,3}|1(?:2|6(?:000|111)|8\\d\\d)|2\\d{1,4}|[3-9]\\d\\d)|2(?:2\\d{1,4}|80\\d\\d)|90(?:5[124578]|7)|1(?:3[34]|77)|(?:2[01]\\d|[79]9[57])\\d{3}|[23][357]\\d{3}',
    'ExampleNumber' => '010',
  ],
  'standardRate' =>
   [
    'NationalNumberPattern' => '0(?:[16][0-2]|80|9[12])|21\\d{4}',
    'ExampleNumber' => '010',
    'PossibleLength' =>
     [
      0 => 3,
      1 => 6,
    ],
  ],
  'carrierSpecific' =>
   [
    'NationalNumberPattern' => '1(?:3[34]|77)|[12]2\\d{1,4}',
    'ExampleNumber' => '120',
  ],
  'smsServices' =>
   [
    'NationalNumberPattern' => '(?:2[0-2]\\d|3[357]|[79]9[57])\\d{3}|2(?:[2357]\\d|80)\\d\\d',
    'ExampleNumber' => '22000',
    'PossibleLength' =>
     [
      0 => 5,
      1 => 6,
    ],
  ],
  'id' => 'ES',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
   [
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
];
