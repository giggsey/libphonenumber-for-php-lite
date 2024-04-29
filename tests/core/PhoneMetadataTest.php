<?php

namespace libphonenumber\Tests\core;

use libphonenumber\PhoneMetadata;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PhoneMetadataTest extends TestCase
{
    private PhoneNumberUtil $phoneUtil;

    protected function setUp(): void
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    /**
     * @return array<string[]>
     */
    public static function phoneNumberRegionList(): array
    {
        $returnList = [];

        PhoneNumberUtil::resetInstance();
        $phoneUtil = PhoneNumberUtil::getInstance();
        foreach ($phoneUtil->getSupportedRegions() as $regionCode) {
            $returnList[] = [$regionCode];
        }

        return $returnList;
    }

    #[DataProvider('phoneNumberRegionList')]
    public function testPhoneNumberMetadataToAndFromArray(string $region): void
    {
        $phoneMetadata = $this->phoneUtil->getMetadataForRegion($region);

        $array = $phoneMetadata->toArray();

        /*
         * Load a new Metadata object from Array, and compare
         */

        $newPhoneMetadata = new PhoneMetadata();
        $newPhoneMetadata->fromArray($array);

        $this->assertEquals($phoneMetadata, $newPhoneMetadata);
    }
}
