<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[1-7]\\d{3,9}|8\\d{8}',
    'PossibleLength' => 
    array (
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
      5 => 9,
      6 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '(?:2|[34][1-3]|5[1-5]|6[1-4])(?:1\\d{2,3}|[2-9]\\d{6,7})',
    'ExampleNumber' => '22123456',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '1[0-25-9]\\d{7,8}',
    'ExampleNumber' => '1023456789',
    'PossibleLength' => 
    array (
      0 => 9,
      1 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '80\\d{7}',
    'ExampleNumber' => '801234567',
    'PossibleLength' => 
    array (
      0 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '60[2-9]\\d{6}',
    'ExampleNumber' => '602345678',
    'PossibleLength' => 
    array (
      0 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'sharedCost' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '50\\d{8}',
    'ExampleNumber' => '5012345678',
    'PossibleLength' => 
    array (
      0 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '70\\d{8}',
    'ExampleNumber' => '7012345678',
    'PossibleLength' => 
    array (
      0 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'pager' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'uan' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voicemail' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'noInternationalDialling' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'KR',
  'countryCode' => 82,
  'internationalPrefix' => '00(?:[124-68]|[37]\\d{2})',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0(8[1-46-8]|85\\d{2})?',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '1(?:0|1[19]|[69]9|5[458])|[57]0',
        1 => '1(?:0|1[19]|[69]9|5(?:44|59|8))|[57]0',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '1(?:[169][2-8]|[78]|5[1-4])|[68]0|[3-6][1-9][2-9]',
        1 => '1(?:[169][2-8]|[78]|5(?:[1-3]|4[56]))|[68]0|[3-6][1-9][2-9]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 => 
    array (
      'pattern' => '(\\d{3})(\\d)(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '131',
        1 => '1312',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '131',
        1 => '131[13-9]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '13[2-9]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3-$4',
      'leadingDigitsPatterns' => 
      array (
        0 => '30',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    6 => 
    array (
      'pattern' => '(\\d)(\\d{4})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '2(?:[26]|3[0-467])',
        1 => '2(?:[26]|3(?:01|1[45]|2[17-9]|39|4|6[67]|7[078]))',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    7 => 
    array (
      'pattern' => '(\\d)(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '2(?:3[0-35-9]|[457-9])',
        1 => '2(?:3(?:0[02-9]|1[0-36-9]|2[02-6]|3[0-8]|6[0-589]|7[1-69]|[589])|[457-9])',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    8 => 
    array (
      'pattern' => '(\\d)(\\d{3})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '21[0-46-9]',
        1 => '21(?:[0-247-9]|3[124]|6[1269])',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    9 => 
    array (
      'pattern' => '(\\d)(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '21[36]',
        1 => '21(?:3[035-9]|6[03-578])',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    10 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[3-6][1-9]1',
        1 => '[3-6][1-9]1(?:[0-46-9])',
        2 => '[3-6][1-9]1(?:[0-247-9]|3[124]|6[1269])',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    11 => 
    array (
      'pattern' => '(\\d{2})(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[3-6][1-9]1',
        1 => '[3-6][1-9]1[36]',
        2 => '[3-6][1-9]1(?:3[035-9]|6[03-578])',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
);
