<?php

namespace spec\Domain;

use PhpSpec\ObjectBehavior;

class PriceSpec extends ObjectBehavior
{
    public function it_should_return_value()
    {
        $this->beConstructedWith(1000, 'EUR');
        $this->getValue()->shouldReturn(1000);
    }
}
