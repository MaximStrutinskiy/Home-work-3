<?php

namespace Vendor\Render\Student;

interface StudentDateInterface extends StudentInterface
{
    /**
     * @param string $studentDate
     */
    public function getStudentDate($studentDate);
}
