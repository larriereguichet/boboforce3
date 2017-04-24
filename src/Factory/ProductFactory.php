<?php

namespace Factory;

use Entity\Product;
use Symfony\Component\PropertyAccess\PropertyAccessor;

/**
 * Class ProductFactory.
 *
 * @author Johan Dufour <johan@larriereguichet.fr>
 */
class ProductFactory
{
    /**
     * @var PropertyAccessor
     */
    private $propertyAccessor;

    /**
     * ProductFactory constructor.
     *
     * @param PropertyAccessor $propertyAccessor
     */
    public function __construct(PropertyAccessor $propertyAccessor)
    {
        $this->propertyAccessor = $propertyAccessor;
    }

    /**
     * @param array $properties
     *
     * @return Product
     */
    public function createProductFromPropertyArray(array $properties = [])
    {
        $product = new Product();
        foreach($properties as $property => $value) {
            $this->getPropertyAccessor()->setValue($product, $property, $value);
        }

        return $product;
    }

    /**
     * @return PropertyAccessor
     */
    public function getPropertyAccessor()
    {
        return $this->propertyAccessor;
    }
}
