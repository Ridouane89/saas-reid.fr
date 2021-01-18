<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class PublishOfferContext implements Context
{
    /**
     * @Given /^I want to publish an offer$/
     */
    public function iWantToPublishAnOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I write the offer$/
     */
    public function iWriteTheOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I offer is published and job seeker can send$/
     */
    public function iOfferIsPublishedAndJobSeekerCanSend()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
