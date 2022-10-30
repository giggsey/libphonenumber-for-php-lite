<?php

namespace libphonenumber\Tests\Issues;

use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;

class CodeCoverageTest extends TestCase
{
    private PhoneNumberUtil $phoneUtil;

    public function setUp(): void
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function testTooShortNumber(): void
    {
        try {
            $this->phoneUtil->parse('+441', 'GB');
        } catch (\Exception $e) {
            $this->assertInstanceOf(NumberParseException::class, $e);
            $this->assertEquals('The string supplied is too short to be a phone number.', $e->getMessage());
            $this->assertEquals(3, $e->getCode());

            $this->assertEquals('Error type: 3. The string supplied is too short to be a phone number.', (string)$e);
        }
    }
}
