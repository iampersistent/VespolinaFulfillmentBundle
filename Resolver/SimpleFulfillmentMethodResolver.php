<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Resolver;

use Vespolina\FulfillmentBundle\Resolver\AbstractFulfillmentMethodResolver;
use Vespolina\PartnerBundle\Model\Address;
use Vespolina\Entity\Product\BaseProduct;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */

class SimpleFulfillmentMethodResolver extends AbstractFulfillmentMethodResolver
{

    public function resolveFulfillmentMethods($products, $zone = null)
    {

        $productTypes = array();

        //Get all product types
        foreach ($products as $product) {
            $productTypes[$product->getType()] = $product->getType();
        }

        if (count($productTypes) > 1) {
            throw new \Exception('Fulfillment of mixed product types is not yet supported');
        } elseif (count($productTypes) == 0) {
            throw new \Exception('No products found to be resolved');

        }

        switch (array_shift($productTypes)) {
            case BaseProduct::PHYSICAL:
            case 'default':

                return $this->resolveFulfillmentMethodsPhysical($products, $zone);
        }

        return array();
    }

    public function resolveFulfillmentMethodsPhysical($products, $zone)
    {
        $fulfillmentMethods = $this->getFulfillmentMethodsByType('shipment');

        if ($zone && $zone instanceof Address) {

        }

        return $fulfillmentMethods;

    }

    protected function getAvailableFulfillmentMethods($fulfillmentType = null)
    {
        //Todo: move to a fulfillment method loader, make configurable

    }
}
