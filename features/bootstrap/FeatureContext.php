<?php

use Behat\Behat\Context\Context;
use Domain\Price;
use Domain\PriceComparator;
use Infrastructure\NBPPriceConverter;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /** @var PriceComparator */
    private $priceComparator;

    /** @var int */
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I use nbp.pl comparator
     */
    public function iUseNbpPlComparator()
    {
        $this->priceComparator = new PriceComparator(new NBPPriceConverter());
    }

    /**
     * @When I compare :price1 and :price2
     */
    public function iCompareAnd($price1, $price2)
    {
        preg_match('/(\d+)([A-Z]+)/', $price1, $match1);
        preg_match('/(\d+)([A-Z]+)/', $price2, $match2);
        $price1 = new Price($match1[1], $match1[2]);
        $price2 = new Price($match2[1], $match2[2]);
        $this->result = $this->priceComparator->compare($price1, $price2);
    }

    /**
     * @Then It should return some result
     */
    public function itShouldReturnSomeResult()
    {
        if (!is_int($this->result)) {
            throw new \DomainException('Returned value is not integer');
        }
    }
}
