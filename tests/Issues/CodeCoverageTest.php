<?php

declare(strict_types=1);

namespace libphonenumber\Tests\Issues;

use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;
use Exception;

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
        } catch (Exception $e) {
            self::assertInstanceOf(NumberParseException::class, $e);
            self::assertEquals('The string supplied is too short to be a phone number.', $e->getMessage());
            self::assertEquals(3, $e->getCode());

            self::assertEquals('Error type: 3. The string supplied is too short to be a phone number.', (string) $e);
        }
    }

    public function testNormalizeDigits(): void
    {
        $result = PhoneNumberUtil::normalizeDigits('12 345-GOOG', true);

        self::assertSame('12 345-GOOG', $result);
    }
}
