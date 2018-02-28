<?php

namespace Domain;

class Price
{
    /** @var int */
    private $value;

    /** @var string */
    private $currency;

    /**
     * Price constructor.
     *
     * @param int $value
     * @param string $currency
     */
    public function __construct(int $value, string $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}
