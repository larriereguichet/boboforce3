<?php

namespace Entity;

/**
 * An offer to transfer some rights to an item or to provide a service — for example,
 * an offer to sell tickets to an event, to rent the DVD of a movie,
 * to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 * For [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields,
 * see [Check Digit calculator](http://www.gs1.org/barcodes/support/check\_digit\_calculator) and
 * [validation guide](http://www.gs1us.org/resources/standards/gtin-validation-guide)
 * from [GS1](http://www.gs1.org/).
 *
 * @see http://schema.org/Offer Documentation on Schema.org
 */
class Offer extends Intangible
{
    /**
     * Taxes rate in percent
     */
    const TAXES_RATE = 20;

    /**
     * @var float The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\\n\\nUsage guidelines:\\n\\n\* Use the \[\[priceCurrency\]\] property (with \[ISO 4217 codes\](http://en.wikipedia.org/wiki/ISO\_4217#Active\_codes) e.g. "USD") instead of including \[ambiguous symbols\](http://en.wikipedia.org/wiki/Dollar\_sign#Currencies\_that\_use\_the\_dollar\_or\_peso\_sign) such as '$' in the value.\\n\* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\\n\* Note that both \[RDFa\](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\\n\* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols
     */
    private $price;

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
     * Gets price.
     *
     * @todo implements this method to return the price including the taxes, the taxes rate is available as a constant.
     * @return float
     */
    public function getPriceWithTaxes()
    {
        return null;
    }
}
