<?php
declare(strict_types = 1);

namespace Butterfly\Annotation;

use Doctrine\Common\Annotations\Reader;

/**
 * Class Resolver
 * @package Butterfly\Annotation
 */
class Resolver
{
    /**
     * @var Reader
     */
    private $reader;

    /**
     * Resolver constructor.
     *
     * @param Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }


}
