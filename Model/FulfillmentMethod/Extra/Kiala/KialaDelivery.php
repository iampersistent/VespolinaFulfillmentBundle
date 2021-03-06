<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model\FulfillmentMethod\Extra\UPS;

/**
 * Support for Kiala shipments (Belgium/France only)
 *
 * @author Daniel Kucharski <daniel@xerias.be>
 */
class KialaDelivery extends AbstractShipmentMethod
{

    public function __construct()
    {
        parent::__construct();
        $this->setName('kiala');
        $this->setDescription('Use Kiala for delivery');
    }

}
