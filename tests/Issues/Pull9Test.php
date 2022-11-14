<?php

namespace libphonenumber\Tests\Issues;

use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;

class Pull9Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGetInstance(): void
    {
        $instance = PhoneNumberUtil::getInstance();

        $this->assertInstanceOf(PhoneNumberUtil::class, $instance);
    }
}
