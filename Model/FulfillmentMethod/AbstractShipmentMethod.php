<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model\FulfillmentMethod;

use Vespolina\FulfillmentBundle\Model\FulfillmentMethod\AbstractFulfillmentMethod;
use Vespolina\FulfillmentBundle\Model\FulfillmentMethod\FulfillmentMethodInterface;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */

abstract class AbstractShipmentMethod extends AbstractFulfillmentMethod
{

    protected $supportedZones;

    public function __construct()
    {
        $this->setType(FulfillmentMethodInterface::PHYSICAL_FULFILLMENT);
    }

    public function addSupportedZone($zone)
    {
        $this->supportedZones[] = $zone;
    }

    public function getSupportedZones()
    {
        return $this->supportedZones;
    }

    public function supportsZone($zone)
    {
        return true; //TODO
    }
}
