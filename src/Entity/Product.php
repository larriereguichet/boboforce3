<?php

namespace Entity;


/**
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
 *
 * @see http://schema.org/Product Documentation on Schema.org
 */
class Product extends Thing
{
    /**
     * Taxes rate in percent
     */
    const TAXES_RATE = 7.25;

    /**
     * @var string A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy
     */
    private $category;

    /**
     * @var Brand The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person
     */
    private $brand;

    /**
     * @var string The color of the product
     */
    private $color;

    /**
     * @var QuantitativeValue The weight of the product or person
     */
    private $weight;

    /**
     * @var Product A pointer to another, somehow related product (or multiple products)
     */
    private $isRelatedTo;

    /**
     * @var float The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\\n\\nUsage guidelines:\\n\\n\* Use the \[\[priceCurrency\]\] property (with \[ISO 4217 codes\](http://en.wikipedia.org/wiki/ISO\_4217#Active\_codes) e.g. "USD") instead of including \[ambiguous symbols\](http://en.wikipedia.org/wiki/Dollar\_sign#Currencies\_that\_use\_the\_dollar\_or\_peso\_sign) such as '$' in the value.\\n\* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\\n\* Note that both \[RDFa\](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\\n\* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols
     */
    private $price;

    public function __construct()
    {
        $this->brand  = new Brand();
        $this->weight = new QuantitativeValue();
    }

    /**
     * Sets category.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets brand.
     *
     * @param Brand $brand
     *
     * @return $this
     */
    public function setBrand(Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Gets brand.
     *
     * @return Brand
     */
    public function getBrandName()
    {
        return 'Brand name';
    }

    /**
     * Sets color.
     *
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets weight.
     *
     * @param QuantitativeValue $weight
     *
     * @return $this
     */
    public function setWeight(QuantitativeValue $weight = null)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets isRelatedTo.
     *
     * @param Product $isRelatedTo
     *
     * @return $this
     */
    public function setIsRelatedTo(Product $isRelatedTo = null)
    {
        $this->isRelatedTo = $isRelatedTo;

        return $this;
    }

    /**
     * Gets isRelatedTo.
     *
     * @return Product
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * Sets price.
     *
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Gets price with taxes.
     *
     * @todo change this method to return the price including the taxes, the taxes rate is available as a constant.
     *
     * @return float
     */
    public function getPriceWithTaxes()
    {
        return 0;
    }

    /**
     * Gets the image path.
     *
     * @todo change this method to return the path of the product image, the name of the image is base on the product identifier ex: 'QUINO1.jpg'.
     *
     * @return string
     */
    public function getImage()
    {
        return '/images/no_image.jpg';
    }

    /**
     * Gets the weight value and the weight unit of this product.
     *
     * @todo the weight value and unit is available in the $weight property, the weight is an object of the QuantitativeValue type.
     *
     * @return string
     */
    public function getWeightValueAndUnit()
    {
        return '0 kg';
    }

    /**
     * Get the URL of the product.
     *
     * @return string
     */
    public function getURL()
    {
        return '/product/'.$this->getIdentifier();
    }
}
