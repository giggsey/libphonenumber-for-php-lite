<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

declare(strict_types=1);

namespace libphonenumber\Tests\core\data;

use libphonenumber\NumberFormat;
use libphonenumber\PhoneMetadata;
use libphonenumber\PhoneNumberDesc;

/**
 * @internal
 */
class PhoneNumberMetadataForTesting_800 extends PhoneMetadata
{
    protected const ID = '001';
    protected const COUNTRY_CODE = 800;

    protected ?string $internationalPrefix = '';
    protected bool $sameMobileAndFixedLinePattern = true;

    public function __construct()
    {
        $this->generalDesc = (new PhoneNumberDesc())
            ->setNationalNumberPattern('\d{8}')
            ->setPossibleLength([8]);
        $this->mobile = PhoneNumberDesc::empty();
        $this->premiumRate = PhoneNumberDesc::empty();
        $this->fixedLine = PhoneNumberDesc::empty();
        $this->numberFormat = [
            (new NumberFormat())
                ->setPattern('(\d{4})(\d{4})')
                ->setFormat('$1 $2')
                ->setLeadingDigitsPattern([])
                ->setNationalPrefixOptionalWhenFormatting(false),
        ];
        $this->tollFree = (new PhoneNumberDesc())
            ->setNationalNumberPattern('\d{8}')
            ->setExampleNumber('12345678');
        $this->sharedCost = PhoneNumberDesc::empty();
        $this->personalNumber = PhoneNumberDesc::empty();
        $this->voip = PhoneNumberDesc::empty();
        $this->pager = PhoneNumberDesc::empty();
        $this->uan = PhoneNumberDesc::empty();
        $this->voicemail = PhoneNumberDesc::empty();
        $this->noInternationalDialling = PhoneNumberDesc::empty();
    }
}
