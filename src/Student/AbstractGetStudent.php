<?php

namespace Vendor\Render\Student;

abstract class AbstractGetStudent
{
    /**
     * @var string
     */
    protected $studentName;

    /**
     * @param string $studentName
     */
    public function __construct($studentName)
    {
        $this->studentName = $studentName;
    }
}
