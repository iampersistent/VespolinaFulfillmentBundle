<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model;

use Vespolina\FulfillmentBundle\Model\FulfillmentInterface;
use Vespolina\FulfillmentBundle\Model\FulfillmentManagerInterface;

/**
 * @author Richard Shank <develop@zestic.com>
 */
interface FulfillmentManagerInterface
{
    /**
     * Create a Fulfillment instance
     * @arg $product
     * @return Vespolina\FulfillmentBundle\Model\FulfillmentInterface
     */
    public function createFulfillment($product);

    /**
     * Find a fulfillment collection by the criteria
     *
     * @param array $criteria
     * @param mixed $orderBy
     * @param mixed $limit
     * @param mixed $offset
     *
     * @return array
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    /**
     * Find a Fulfillment by its object identifier
     *
     * @param $id
     * @return Vespolina\FulfillmentBundle\Model\FulfillmentInterface
     */
    public function findFulfillmentById($id);

    /**
     * Update and persist the fulfillment
     *
     * @param Vespolina\FulfillmentBundle\Model\FulfillmentInterface $fulfillment
     * @param Boolean                                                $andFlush    Whether to flush the changes (default true)
     */
    public function updateFulfillment(FulfillmentInterface $fulfillment, $andFlush = true);

}
