<?php

declare(strict_types=1);

namespace libphonenumber;

/**
 * Phone Number Description
 */
class PhoneNumberDesc
{
    protected bool $hasNationalNumberPattern = false;
    protected string $nationalNumberPattern = '';
    protected bool $hasExampleNumber = false;
    protected string $exampleNumber = '';
    /**
     * @var array
     */
    protected array $possibleLength;
    /**
     * @var array
     */
    protected array $possibleLengthLocalOnly;

    public function __construct()
    {
        $this->clear();
    }

    public function clear(): PhoneNumberDesc
    {
        $this->clearNationalNumberPattern();
        $this->clearPossibleLength();
        $this->clearPossibleLengthLocalOnly();
        $this->clearExampleNumber();

        return $this;
    }

    public function getPossibleLength(): array
    {
        return $this->possibleLength;
    }

    public function setPossibleLength(array $possibleLength): void
    {
        $this->possibleLength = $possibleLength;
    }

    public function addPossibleLength($possibleLength): void
    {
        if (!in_array($possibleLength, $this->possibleLength)) {
            $this->possibleLength[] = $possibleLength;
        }
    }

    public function clearPossibleLength(): void
    {
        $this->possibleLength = [];
    }

    public function getPossibleLengthLocalOnly(): array
    {
        return $this->possibleLengthLocalOnly;
    }

    public function setPossibleLengthLocalOnly(array $possibleLengthLocalOnly): void
    {
        $this->possibleLengthLocalOnly = $possibleLengthLocalOnly;
    }

    public function addPossibleLengthLocalOnly($possibleLengthLocalOnly): void
    {
        if (!in_array($possibleLengthLocalOnly, $this->possibleLengthLocalOnly)) {
            $this->possibleLengthLocalOnly[] = $possibleLengthLocalOnly;
        }
    }

    public function clearPossibleLengthLocalOnly(): void
    {
        $this->possibleLengthLocalOnly = [];
    }

    public function hasNationalNumberPattern(): bool
    {
        return $this->hasNationalNumberPattern;
    }

    public function getNationalNumberPattern(): string
    {
        return $this->nationalNumberPattern;
    }

    public function setNationalNumberPattern(string $value): PhoneNumberDesc
    {
        $this->hasNationalNumberPattern = true;
        $this->nationalNumberPattern = $value;

        return $this;
    }

    public function clearNationalNumberPattern(): PhoneNumberDesc
    {
        $this->hasNationalNumberPattern = false;
        $this->nationalNumberPattern = '';
        return $this;
    }

    public function hasExampleNumber(): bool
    {
        return $this->hasExampleNumber;
    }

    public function getExampleNumber(): string
    {
        return $this->exampleNumber;
    }

    public function setExampleNumber(string $value): PhoneNumberDesc
    {
        $this->hasExampleNumber = true;
        $this->exampleNumber = $value;

        return $this;
    }

    public function clearExampleNumber(): self
    {
        $this->hasExampleNumber = false;
        $this->exampleNumber = '';

        return $this;
    }

    public function mergeFrom(PhoneNumberDesc $other): self
    {
        if ($other->hasNationalNumberPattern()) {
            $this->setNationalNumberPattern($other->getNationalNumberPattern());
        }
        if ($other->hasExampleNumber()) {
            $this->setExampleNumber($other->getExampleNumber());
        }
        $this->setPossibleLength($other->getPossibleLength());
        $this->setPossibleLengthLocalOnly($other->getPossibleLengthLocalOnly());

        return $this;
    }

    public function exactlySameAs(PhoneNumberDesc $other): bool
    {
        return $this->nationalNumberPattern === $other->nationalNumberPattern &&
        $this->exampleNumber === $other->exampleNumber;
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->hasNationalNumberPattern()) {
            $data['NationalNumberPattern'] = $this->getNationalNumberPattern();
        }
        if ($this->hasExampleNumber()) {
            $data['ExampleNumber'] = $this->getExampleNumber();
        }

        $data['PossibleLength'] = $this->getPossibleLength();
        $data['PossibleLengthLocalOnly'] = $this->getPossibleLengthLocalOnly();

        return $data;
    }

    public function fromArray(array $input): static
    {
        if (isset($input['NationalNumberPattern']) && $input['NationalNumberPattern'] !== '') {
            $this->setNationalNumberPattern($input['NationalNumberPattern']);
        }
        if (isset($input['ExampleNumber']) && $input['NationalNumberPattern'] !== '') {
            $this->setExampleNumber($input['ExampleNumber']);
        }
        $this->setPossibleLength($input['PossibleLength']);
        $this->setPossibleLengthLocalOnly($input['PossibleLengthLocalOnly']);

        return $this;
    }
}
