<?php

namespace Entity;

/**
 * A point value or interval for product characteristics and other purposes.
 *
 * @see http://schema.org/QuantitativeValue Documentation on Schema.org
 */
class QuantitativeValue extends StructuredValue
{
    /**
     * @var string A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for [unitCode](unitCode)
     */
    private $unitText;

    /**
     * @var string The value of the quantitative value or property value node.\\n\\n\* For \[\[QuantitativeValue\]\] and \[\[MonetaryAmount\]\], the recommended type for values is 'Number'.\\n\* For \[\[PropertyValue\]\], it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'
     */
    private $value;

    /**
     * Sets unitText.
     *
     * @param string $unitText
     *
     * @return $this
     */
    public function setUnitText($unitText)
    {
        $this->unitText = $unitText;

        return $this;
    }

    /**
     * Gets unitText.
     *
     * @return string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * Sets value.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Gets value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
