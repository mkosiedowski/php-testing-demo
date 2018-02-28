<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
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
        throw new PendingException();
    }

    /**
     * @When I compare :arg1 and :arg2
     */
    public function iCompareAnd($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then It should return some result
     */
    public function itShouldReturnSomeResult()
    {
        throw new PendingException();
    }
}
