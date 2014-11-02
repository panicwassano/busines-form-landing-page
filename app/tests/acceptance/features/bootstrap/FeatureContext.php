<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

use PHPUnit_Framework_Assert as Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
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
     * @static
     * @beforeSuite
     */
    public static function bootstrapLaravel()
    {
        $unitTesting = true;
        $testEnvironment = 'local';

        $app = require_once __DIR__ . '/../../../../../bootstrap/start.php';
        $app->boot();
    }

    /**
     * @Then last claim message name is :name
     */
    public function lastClaimMessageName($name)
    {
        $claim = Claim::orderBy('id', 'DESC')->first();
        Assert::assertEquals($name, $claim->name, sprintf('Current name is "%s" and not equal "%s" expected.', $name, $claim->name));
    }
}
