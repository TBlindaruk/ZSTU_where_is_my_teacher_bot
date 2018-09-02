<?php
declare(strict_types = 1);

namespace Butterfly;

/**
 * Interface TableInterface
 * @package Butterfly
 */
interface TableInterface
{
    /**
     * @return array
     */
    public function headers(): array;

    /**
     * @return array
     */
    public function rows(): array;
}
