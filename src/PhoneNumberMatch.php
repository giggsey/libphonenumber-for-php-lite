<?php

namespace libphonenumber;

class PhoneNumberMatch implements \Stringable
{
    /**
     * The start index into the text.
     */
    private int $start;

    /**
     * The raw substring matched.
     */
    private string $rawString;

    /**
     * Creates a new match
     *
     * @param int $start The start index into the target text
     * @param string $rawString The matched substring of the target text
     * @param PhoneNumber $number The matched phone number
     */
    public function __construct($start, $rawString, private PhoneNumber $number)
    {
        if ($start < 0) {
            throw new \InvalidArgumentException('Start index must be >= 0.');
        }

        if ($rawString === null) {
            throw new \InvalidArgumentException('$rawString must be a string');
        }

        $this->start = $start;
        $this->rawString = $rawString;
    }

    /**
     * Returns the phone number matched by the receiver.
     * @return PhoneNumber
     */
    public function number()
    {
        return $this->number;
    }

    /**
     * Returns the start index of the matched phone number within the searched text.
     * @return int
     */
    public function start()
    {
        return $this->start;
    }

    /**
     * Returns the exclusive end index of the matched phone number within the searched text.
     * @return int
     */
    public function end()
    {
        return $this->start + \mb_strlen($this->rawString);
    }

    /**
     * Returns the raw string matched as a phone number in the searched text.
     * @return string
     */
    public function rawString()
    {
        return $this->rawString;
    }

    public function __toString(): string
    {
        return (string) "PhoneNumberMatch [{$this->start()},{$this->end()}) {$this->rawString}";
    }
}
