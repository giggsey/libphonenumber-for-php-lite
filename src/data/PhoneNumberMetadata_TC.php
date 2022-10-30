<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
  'generalDesc' =>
  [
    'NationalNumberPattern' => '(?:[58]\\d\\d|649|900)\\d{7}',
    'PossibleLength' =>
    [
      0 => 10,
    ],
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '649(?:266|712|9(?:4\\d|50))\\d{4}',
    'ExampleNumber' => '6497121234',
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '649(?:2(?:3[129]|4[1-79])|3\\d\\d|4[34][1-3])\\d{4}',
    'ExampleNumber' => '6492311234',
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '8002345678',
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '900[2-9]\\d{6}',
    'ExampleNumber' => '9002345678',
  ],
  'sharedCost' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'personalNumber' =>
  [
    'NationalNumberPattern' => '52(?:3(?:[2-46-9][02-9]\\d|5(?:[02-46-9]\\d|5[0-46-9]))|4(?:[2-478][02-9]\\d|5(?:[034]\\d|2[024-9]|5[0-46-9])|6(?:0[1-9]|[2-9]\\d)|9(?:[05-9]\\d|2[0-5]|49)))\\d{4}|52[34][2-9]1[02-9]\\d{4}|5(?:00|2[125-7]|33|44|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '5002345678',
  ],
  'voip' =>
  [
    'NationalNumberPattern' => '649(?:71[01]|966)\\d{4}',
    'ExampleNumber' => '6497101234',
    'PossibleLengthLocalOnly' =>
    [
      0 => 7,
    ],
  ],
  'pager' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'uan' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'voicemail' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'noInternationalDialling' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'id' => 'TC',
  'countryCode' => 1,
  'internationalPrefix' => '011',
  'nationalPrefix' => '1',
  'nationalPrefixForParsing' => '1|([2-479]\\d{6})$',
  'nationalPrefixTransformRule' => '649$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
  ],
  'mainCountryForCode' => false,
  'leadingDigits' => '649',
  'mobileNumberPortableRegion' => true,
];
