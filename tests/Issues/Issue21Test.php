<?php

declare(strict_types=1);

namespace libphonenumber\Tests\Issues;

use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;

class Issue21Test extends TestCase
{
    private PhoneNumberUtil $phoneUtil;

    public function setUp(): void
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function testFloatNumber(): void
    {
        $number = '0358112345678987';
        $phoneNumber = $this->phoneUtil->parse($number, 'DE');

        self::assertTrue($this->phoneUtil->isValidNumber($phoneNumber));

        self::assertEquals('+49358112345678987', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::E164));
        self::assertEquals('+49 3581 12345678987', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::INTERNATIONAL));
        self::assertEquals('03581 12345678987', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::NATIONAL));


        self::assertEquals('011 49 3581 12345678987', $this->phoneUtil->formatOutOfCountryCallingNumber($phoneNumber, 'US'));
        self::assertEquals('00 49 3581 12345678987', $this->phoneUtil->formatOutOfCountryCallingNumber($phoneNumber, 'CH'));
    }

    public function testLongerNumber(): void
    {
        $number = '12345678901234567';
        $phoneNumber = $this->phoneUtil->parse($number, 'DE');

        self::assertEquals('+4912345678901234567', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::E164));
        self::assertEquals('+49 12345678901234567', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::INTERNATIONAL));
        self::assertEquals('12345678901234567', $this->phoneUtil->format($phoneNumber, PhoneNumberFormat::NATIONAL));


        self::assertEquals('011 49 12345678901234567', $this->phoneUtil->formatOutOfCountryCallingNumber($phoneNumber, 'US'));
        self::assertEquals('00 49 12345678901234567', $this->phoneUtil->formatOutOfCountryCallingNumber($phoneNumber, 'CH'));
    }
}
