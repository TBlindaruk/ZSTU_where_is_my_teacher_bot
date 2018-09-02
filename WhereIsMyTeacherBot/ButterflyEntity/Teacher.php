<?php
declare(strict_types = 1);

namespace WhereIsMyTeacherBot\ButterflyEntity;

use Butterfly\Annotation\Table;

/**
 * Class Teacher
 *
 * @Table(value="\WhereIsMyTeacherBot\ButterflyTable\TeacherTable")
 *
 * @package WhereIsMyTeacherBot\ButterflyEntity
 */
class Teacher
{
    /**
     * @var string
     */
    private $teacher;

    /**
     * @return string
     */
    public function getTeacher(): string
    {
        return $this->teacher;
    }
}
