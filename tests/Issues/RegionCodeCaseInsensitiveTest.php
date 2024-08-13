<?php

namespace libphonenumber\Tests\Issues;

use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;
use libphonenumber\PhoneMetadata;

class RegionCodeCaseInsensitiveTest extends TestCase
{
    private PhoneNumberUtil $phoneUtil;

    public function setUp(): void
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function testParse(): void
    {
        $number = '07987458147';
        $phoneObject = $this->phoneUtil->parse($number, 'gb');

        $this->assertTrue($this->phoneUtil->isValidNumber($phoneObject));

        $this->assertTrue($this->phoneUtil->isValidNumberForRegion($phoneObject, 'gb'));
    }

    public function testIsNANPACountry(): void
    {
        $this->assertTrue($this->phoneUtil->isNANPACountry('us'));
    }

    public function testGetMetadataForRegion(): void
    {
        $metadata = $this->phoneUtil->getMetadataForRegion('gb');

        $this->assertInstanceOf(PhoneMetadata::class, $metadata);
    }

    public function testGetCountryCodeForRegion(): void
    {
        $this->assertEquals(44, $this->phoneUtil->getCountryCodeForRegion('gb'));
    }

    public function testExampleNumber(): void
    {
        $this->assertSame(
            (string) $this->phoneUtil->parse('+441212345678'),
            (string) $this->phoneUtil->getExampleNumber('gb')
        );
        $this->assertSame(
            (string) $this->phoneUtil->parse('+44121234567'),
            (string) $this->phoneUtil->getInvalidExampleNumber('gb')
        );
        $this->assertSame(
            (string) $this->phoneUtil->parse('+447400123456'),
            (string) $this->phoneUtil->getExampleNumberForType('gb', PhoneNumberType::MOBILE)
        );
    }
}
