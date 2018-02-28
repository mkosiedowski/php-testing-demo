<?php

namespace spec\Domain;

use Domain\Price;
use Domain\PriceConverter;
use PhpSpec\ObjectBehavior;

class PriceComparatorSpec extends ObjectBehavior
{
    public function let(PriceConverter $converter)
    {
        $this->beConstructedWith($converter);
    }

    public function it_should_return_equal()
    {
        $price1 = new Price(100, 'EUR');
        $price2 = new Price(100, 'EUR');
        $this->compare($price1, $price2)->shouldReturn(0);
    }

    public function it_should_convert_first(PriceConverter $converter)
    {
        $price1 = new Price(100, 'EUR');
        $price2 = new Price(100, 'PLN');
        $priceConverted = new Price(25, 'EUR');
        $converter->convert($price2, 'EUR')->willReturn($priceConverted);
        $this->compare($price1, $price2)->shouldReturn(1);
    }
}
