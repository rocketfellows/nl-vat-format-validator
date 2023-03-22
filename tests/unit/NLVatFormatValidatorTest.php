<?php

namespace rocketfellows\NLVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\NLVatFormatValidator\NLVatFormatValidator;

class NLVatFormatValidatorTest extends TestCase
{
    /**
     * @var NLVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new NLVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'NL123456789B01',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL000000000B00',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL111111111B11',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL999999999B99',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL123456789BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL000000000BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL111111111BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL999999999BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789B01',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000B00',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111B11',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999B99',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999BO2',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'NL12345678B01',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL1234567890B01',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789B011',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789B0',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789A01',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL12345678901B',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL12345678BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL1234567890BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789AO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BA2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BO1',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BO22',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890B01',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678B01',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789A01',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789B011',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789B0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL1234567890BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL12345678BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BO22',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BO',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'NL123456789BA2',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890BO2',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789BO22',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789BO',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789BA2',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789O2',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
