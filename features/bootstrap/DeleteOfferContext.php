<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class DeleteOfferContext implements Context
{
    /**
     * @Given /^I want to delete an offer$/
     */
    public function iWantToDeleteAnOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I select the offer to delete it$/
     */
    public function iSelectTheOfferToDeleteIt()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^job seeker will no longer be able to apply for the job offer$/
     */
    public function jobSeekerWillNoLongerBeAbleToApplyForTheJobOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
