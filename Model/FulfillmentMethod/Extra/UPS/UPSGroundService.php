<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model\FulfillmentMethod\Extra\UPS;

use Vespolina\FulfillmentBundle\Model\FulfillmentMethod\Extra\UPS\AbstractUPSShipmentMethod;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
class UPSGroundService extends AbstractUPSShipmentMethod
{

    public function __construct()
    {
        parent::__construct();
        $this->setName('ups_ground_service');
        $this->setDescription('UPS Ground Service');
    }

}
