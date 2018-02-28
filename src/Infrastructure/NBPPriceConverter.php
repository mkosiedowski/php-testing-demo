<?php

namespace Infrastructure;

use Domain\Price;
use Domain\PriceConverter;

class NBPPriceConverter implements PriceConverter
{
    public function convert(Price $price, string $newCurrency): Price
    {
        // TODO: Implement proper convert() method using nbp.pl!
        return new Price($price->getValue(), $newCurrency);
    }
}
