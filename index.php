<?php

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$showStudentInfo = new \Vendor\Render\Student\GetStudent($faker->name);
$showStudentInfo->getStudentName($faker->name);

