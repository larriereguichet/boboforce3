<?php

namespace Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A utility class that serves as the umbrella for a number of 'intangible' things such as quantities, structured values, etc.
 *
 * @see http://schema.org/Intangible Documentation on Schema.org
 */
abstract class Intangible extends Thing
{
}
