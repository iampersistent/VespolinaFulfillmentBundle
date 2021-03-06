<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model\FulfillmentMethod;

use Vespolina\FulfillmentBundle\Model\FulfillmentMethod\AbstractFulfillmentMethod;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */

class AbstractDownloadMethod extends AbstractFulfillmentMethod
{

    public function __construct()
    {
        $this->setType(FulfillmentMethodInterface::VIRTUAL_FULFILLMENT);
    }

    /**
     * Locations from which can be downloaded (eg. http server, torrent, ...)
     *
     * @var
     */
    protected $locations;

    public function addLocation($location)
    {
        $this->locations[] = $location;
    }

    public function getLocations()
    {
        return $this->locations;
    }

}
