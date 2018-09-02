<?php
declare(strict_types = 1);

namespace Butterfly\Annotation;

use Butterfly\TableInterface;

/**
 * Class Table
 * @package Butterfly\Annotation
 *
 * @Annotation
 */
class Table
{
    /**
     * @var string
     */
    protected $table;

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
        if (empty($options['value']) || !\is_string($options['value'])) {
            throw new \InvalidArgumentException('Property "values" is required and should be string');
        }
        if ($table = $options['value']) {
            $table = new $table();
            if (!$table instanceof TableInterface) {
                throw new \InvalidArgumentException(
                    'Property "values" should be class witch implement ' . TableInterface::class
                );
            }
        }
        $this->table = $options['value'];
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }
}
