<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model;

/**
 * @author Richard Shank <develop@zestic.com>
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface FulfillmentInterface
{
    public function setState($state);

    public function getState();

    public function getProduct();

    public function setProduct($product);
}
