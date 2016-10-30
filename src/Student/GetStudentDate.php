<?php

namespace Vendor\Render\Student;

class GetStudentDate extends GetStudent implements StudentDateInterface
{
    /**
     * @var string
     */
    private $studentDate;

    /**
     * {@inheritdoc}
     */
    public function getStudentDate($studentDate)
    {
        $this->studentDate = $studentDate;
        $studentDate = (new \DateTime())->format('Y-M-d');
        echo $studentDate;
    }
}