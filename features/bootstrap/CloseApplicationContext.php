<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class CloseApplicationContext implements Context
{
    /**
     * @Given /^I want to close an application$/
     */
    public function iWantToCloseAnApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I close the application$/
     */
    public function iCloseTheApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the recruitment process is stopped$/
     */
    public function theRecruitmentProcessIsStopped()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
