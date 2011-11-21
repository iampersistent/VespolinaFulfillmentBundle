<?php

namespace Vespolina\FulfillmentBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use  Vespolina\FulfillmentBundle\Features\Model\Product;
use  Vespolina\FulfillmentBundle\Features\Model\DummyFulfillment;
use  Vespolina\FulfillmentBundle\Features\Model\FulfillmentManager;
//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends BehatContext //MinkContext if you want to test web
{
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        $container = $this->getContainer();
//        $container->get('some_service')->doSomethingWith($argument);
//    }
//

      /**
        * @Given /^I create a fulfillment on a product$/
        */
       public function iCreateAFulfillmentOnAProduct()
       {

           $product = new Product();
           $fm = new FulfillmentManager('Vespolina\FulfillmentBundle\Features\Model\DummyFulfillment');
           $fulfillment = $fm->createFulfillment($product);
           assertInstanceOf('Vespolina\FulfillmentBundle\Model\FulfillmentInterface', $fulfillment);
       }

       /**
        * @Then /^I should see fulfillment order of this product initialized$/
        */
       public function iShouldSeeFulfillmentOrderOfThisProductInitialized()
       {
           throw new PendingException();
       }

       /**
        * @When /^I set status of the fulfillment order to "([^"]*)"$/
        */
       public function iSetStatusOfTheFulfillmentOrderTo($argument1)
       {
           throw new PendingException();
       }

       /**
        * @Then /^I should read back "([^"]*)" for status$/
        */
       public function iShouldReadBackForStatus($argument1)
       {
           throw new PendingException();
       }


}