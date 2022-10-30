<?php

namespace libphonenumber\Tests\core;

use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;
use PHPUnit\Framework\TestCase;

/**
 * Verifies all of the example numbers in the metadata are valid and of the correct type. If no
 * example number exists for a particular type, the test still passes since not all types are
 * relevant for all regions. Tests that check the XML schema will ensure that an exampleNumber
 * node is present for every phone number description.
 */
class ExampleNumbersTest extends TestCase
{
    private PhoneNumberUtil $phoneNumberUtil;

    public static function setUpBeforeClass(): void
    {
        PhoneNumberUtil::resetInstance();
        PhoneNumberUtil::getInstance();
    }

    public function setUp(): void
    {
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
    }

    /**
     * @return array<string[]>
     */
    public function regionList(): array
    {
        $returnList = [];

        PhoneNumberUtil::resetInstance();
        $phoneUtil = PhoneNumberUtil::getInstance();
        foreach ($phoneUtil->getSupportedRegions() as $regionCode) {
            $returnList[] = [$regionCode];
        }

        return $returnList;
    }

    public function numberTypes(): array
    {
        return [
            [PhoneNumberType::FIXED_LINE],
            [PhoneNumberType::MOBILE],
            [PhoneNumberType::FIXED_LINE_OR_MOBILE],
            [PhoneNumberType::TOLL_FREE],
            [PhoneNumberType::PREMIUM_RATE],
            [PhoneNumberType::SHARED_COST],
            [PhoneNumberType::VOIP],
            [PhoneNumberType::PERSONAL_NUMBER],
            [PhoneNumberType::PAGER],
            [PhoneNumberType::UAN],
            [PhoneNumberType::VOICEMAIL],
        ];
    }

    /**
     * @dataProvider regionList
     */
    public function testFixedLine($region): void
    {
        $fixedLineTypes = [PhoneNumberType::FIXED_LINE, PhoneNumberType::FIXED_LINE_OR_MOBILE];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::FIXED_LINE, $fixedLineTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testFixedLineOrMobile($region): void
    {
        $numberTypes = [PhoneNumberType::FIXED_LINE, PhoneNumberType::FIXED_LINE_OR_MOBILE];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::FIXED_LINE_OR_MOBILE, $numberTypes, $region);
    }

    private function checkNumbersValidAndCorrectType(
        $exampleNumberRequestedType,
        $possibleExpectedTypes,
        $regionCode
    ): void {
        $exampleNumber = $this->phoneNumberUtil->getExampleNumberForType($regionCode, $exampleNumberRequestedType);
        if ($exampleNumber !== null) {
            $this->assertTrue(
                $this->phoneNumberUtil->isValidNumber($exampleNumber),
                "Failed validation for {$exampleNumber}"
            );

            // We know the number is valid, now we check the type.
            $exampleNumberType = $this->phoneNumberUtil->getNumberType($exampleNumber);
            $this->assertContains($exampleNumberType, $possibleExpectedTypes, "Wrong type for {$exampleNumber}");
        }
    }

    /**
     * @dataProvider regionList
     */
    public function testMobile($region): void
    {
        $mobileTypes = [PhoneNumberType::MOBILE, PhoneNumberType::FIXED_LINE_OR_MOBILE];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::MOBILE, $mobileTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testTollFree($region): void
    {
        $tollFreeTypes = [PhoneNumberType::TOLL_FREE];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::TOLL_FREE, $tollFreeTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testPremiumRate($region): void
    {
        $premiumRateTypes = [PhoneNumberType::PREMIUM_RATE];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::PREMIUM_RATE, $premiumRateTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testVoip($region): void
    {
        $voipTypes = [PhoneNumberType::VOIP];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::VOIP, $voipTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testPager($region): void
    {
        $pagerTypes = [PhoneNumberType::PAGER];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::PAGER, $pagerTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testUan($region): void
    {
        $uanTypes = [PhoneNumberType::UAN];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::UAN, $uanTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testVoicemail($region): void
    {
        $voicemailTypes = [PhoneNumberType::VOICEMAIL];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::VOICEMAIL, $voicemailTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testPersonalNumber($region): void
    {
        $numberTypes = [PhoneNumberType::PERSONAL_NUMBER];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::PERSONAL_NUMBER, $numberTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testSharedCost(string $region): void
    {
        $sharedCostTypes = [PhoneNumberType::SHARED_COST];
        $this->checkNumbersValidAndCorrectType(PhoneNumberType::SHARED_COST, $sharedCostTypes, $region);
    }

    /**
     * @dataProvider regionList
     */
    public function testCanBeInternationallyDialled($regionCode): void
    {
        $exampleNumber = null;
        $desc = $this->phoneNumberUtil->getMetadataForRegion($regionCode)->getNoInternationalDialling();
        try {
            if ($desc->hasExampleNumber()) {
                $exampleNumber = $this->phoneNumberUtil->parse($desc->getExampleNumber(), $regionCode);
            }
        } catch (NumberParseException $e) {
        }

        if ($exampleNumber !== null && $this->phoneNumberUtil->canBeInternationallyDialled($exampleNumber)) {
            $this->fail("Number {$exampleNumber} should not be internationally diallable");
        }
    }

    public function supportedGlobalNetworkCallingCodes(): array
    {
        $returnList = [];

        PhoneNumberUtil::resetInstance();
        $phoneUtil = PhoneNumberUtil::getInstance();
        foreach ($phoneUtil->getSupportedGlobalNetworkCallingCodes() as $callingCode) {
            $returnList[] = [$callingCode];
        }

        return $returnList;
    }

    /**
     * @dataProvider supportedGlobalNetworkCallingCodes
     */
    public function testGlobalNetworkNumbers($callingCode): void
    {
        $exampleNumber = $this->phoneNumberUtil->getExampleNumberForNonGeoEntity($callingCode);
        $this->assertNotNull($exampleNumber, 'No example phone number for calling code ' . $callingCode);
        if (!$this->phoneNumberUtil->isValidNumber($exampleNumber)) {
            $this->fail('Failed validation for ' . $exampleNumber);
        }
    }

    /**
     * @dataProvider regionList
     * @param string $regionCode
     */
    public function testEveryRegionHasAnExampleNumber(string $regionCode): void
    {
        $exampleNumber = $this->phoneNumberUtil->getExampleNumber($regionCode);
        $this->assertNotNull($exampleNumber, 'No example number found for region ' . $regionCode);

        /*
         * Check the number is valid
         */

        $e164 = $this->phoneNumberUtil->format($exampleNumber, PhoneNumberFormat::E164);

        $phoneObject = $this->phoneNumberUtil->parse($e164, 'ZZ');

        $this->assertEquals($phoneObject, $exampleNumber);

        $this->assertTrue($this->phoneNumberUtil->isValidNumber($phoneObject));
        $this->assertTrue($this->phoneNumberUtil->isValidNumberForRegion($phoneObject, $regionCode));
    }

    /**
     * @dataProvider regionList
     * @param string $regionCode
     */
    public function testEveryRegionHasAnInvalidExampleNumber(string $regionCode): void
    {
        $exampleNumber = $this->phoneNumberUtil->getInvalidExampleNumber($regionCode);
        $this->assertNotNull($exampleNumber, 'No invalid example number found for region ' . $regionCode);
    }

    /**
     * @dataProvider numberTypes
     * @param int $numberType
     */
    public function testEveryTypeHasAnExampleNumber(int $numberType): void
    {
        $exampleNumber = $this->phoneNumberUtil->getExampleNumberForType($numberType);
        $this->assertNotNull($exampleNumber, 'No example number found for type ' . $numberType);
    }
}
