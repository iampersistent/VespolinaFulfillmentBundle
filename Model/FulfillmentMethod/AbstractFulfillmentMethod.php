<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\FulfillmentBundle\Model\FulfillmentMethod;

use Vespolina\FulfillmentBundle\Model\FulfillmentMethod\FulfillmentMethodInterface;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */

abstract class AbstractFulfillmentMethod implements FulfillmentMethodInterface
{

    protected $categories;
    protected $description;
    protected $name;
    protected $type;

    public function addCategory($category)
    {
        $this->categories[] = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
