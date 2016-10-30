<?php

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$showStudentInfo1 = new \Vendor\Render\Student\GetStudent($faker->name);
$showStudentInfo1->getStudentName('');

$showStudentInfo2 = new \Vendor\Render\Student\GetStudentDate($faker->name);
$showStudentInfo2->getStudentName('');
$showStudentInfo2->getStudentDate('');

