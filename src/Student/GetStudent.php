<?php

namespace Vendor\Render\Student;

class GetStudent extends AbstractGetStudent implements StudentInterface
{
    /**
     * Outputs the result: $studentName.
     *
     * @param string $studentName
     */
    public function getStudentName($studentName)
    {
        echo $this->studentName;
    }
}
