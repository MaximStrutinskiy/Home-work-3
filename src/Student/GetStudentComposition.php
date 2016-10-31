<?php

namespace Vendor\Render\Student;

use \Vendor\Render\Student\GetStudent as GetStudentName;

class GetStudentComposition
{
    protected $creeateStudent;
    protected $getStudent;

    public function __constructor($getStudent)
    {
        $this->creeateStudent = new GetStudentName($getStudent);
        $this->getStudent = $this->creeateStudent->getStudentName($getStudent);
    }

    public function renderStudentName()
    {
        echo $this->getStudent;
    }
}