<?php

namespace Domain;

interface PriceConverter
{
    public function convert(Price $price, string $newCurrency): Price;
}
