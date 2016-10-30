<?php

namespace Vendor\Render\Student;

class GetStudent extends AbstractGetStudent implements StudentInterface
{
    /**
     * {@inheritdoc}
     */
    public function getStudentName($studentName)
    {
        echo '1: ', $this->studentName;
    }
}