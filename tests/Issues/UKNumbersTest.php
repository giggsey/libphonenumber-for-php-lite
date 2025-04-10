<?php

declare(strict_types=1);

namespace libphonenumber\Tests\Issues;

use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;

class UKNumbersTest extends TestCase
{
    protected PhoneNumberUtil $phoneUtil;

    public function setUp(): void
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function testMobileNumber(): void
    {
        $number = '07987458147';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(PhoneNumberType::MOBILE, $type, 'Checking phone number is detected as mobile');

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+447987458147', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('07987 458147', $formattedNational, 'Checking National format is correct');
    }

    public function testFixedLine(): void
    {
        $number = '01234512345';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(PhoneNumberType::FIXED_LINE, $type, 'Checking phone number is detected as fixed line');

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+441234512345', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('01234 512345', $formattedNational, 'Checking National format is correct');
    }

    public function testPersonalNumber(): void
    {
        $number = '07010020249';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(
            PhoneNumberType::PERSONAL_NUMBER,
            $type,
            'Checking phone number is detected as a personal number'
        );

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+447010020249', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('070 1002 0249', $formattedNational, 'Checking National format is correct');
    }

    public function testUAN(): void
    {
        $number = '03335555555';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(PhoneNumberType::UAN, $type, 'Checking phone number is detected as UAN');

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+443335555555', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('0333 555 5555', $formattedNational, 'Checking National format is correct');
    }

    public function testTollFree(): void
    {
        $number = '0800800150';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(PhoneNumberType::TOLL_FREE, $type, 'Checking phone number is detected as TOLL FREE');

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+44800800150', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('0800 800150', $formattedNational, 'Checking National format is correct');
    }

    public function testPremium(): void
    {
        $number = '09063020288';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(PhoneNumberType::PREMIUM_RATE, $type, 'Checking phone number is detected as PREMIUM RATE');

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+449063020288', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('0906 302 0288', $formattedNational, 'Checking National format is correct');
    }

    public function testChildLine(): void
    {
        $number = '08001111';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertTrue($valid, 'Checking phone number is valid');

        $type = $this->phoneUtil->getNumberType($phoneObject);
        self::assertEquals(
            PhoneNumberType::TOLL_FREE,
            $type,
            'Checking phone number is detected as TOLL FREE'
        );

        $formattedE164 = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::E164);
        self::assertEquals('+448001111', $formattedE164, 'Checking E164 format is correct');

        $formattedNational = $this->phoneUtil->format($phoneObject, PhoneNumberFormat::NATIONAL);
        self::assertEquals('0800 1111', $formattedNational, 'Checking National format is correct');
    }

    public function testInvalidNumber(): void
    {
        $number = '123401234512345';
        $phoneObject = $this->phoneUtil->parse($number, 'GB');

        $valid = $this->phoneUtil->isValidNumber($phoneObject);
        self::assertFalse($valid, 'Checking phone number is invalid');
    }

    public function testFormattingNumberWithNoCountryCode(): void
    {
        $number = new PhoneNumber();
        $number->setNationalNumber('999');

        $formatted = $this->phoneUtil->format($number, PhoneNumberFormat::E164);
        self::assertEquals('999', $formatted);
    }
}
