<?php

namespace Domain;

class PriceComparator
{
    /** @var PriceConverter */
    private $priceConverter;

    /**
     * PriceComparator constructor.
     *
     * @param PriceConverter $priceConverter
     */
    public function __construct(PriceConverter $priceConverter)
    {
        $this->priceConverter = $priceConverter;
    }

    /**
     * Compares price and returns:
     *  1 if $price1 is greater than $price2
     *  0 if prices are equal
     *  -1 if $price1 is lower than $price2
     *
     * @param Price $price1
     * @param Price $price2
     * @return int
     */
    public function compare(Price $price1, Price $price2): int
    {
        if ($price1->getCurrency() === $price2->getCurrency()) {
            $comparablePrice = $price2;
        } else {
            $comparablePrice = $this->priceConverter->convert($price2, $price1->getCurrency());
        }

        return $price1->getValue() <=> $comparablePrice->getValue();
    }
}
