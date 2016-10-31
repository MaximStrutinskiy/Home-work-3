<?php

require_once __DIR__.'/vendor/autoload.php';

/**
 * Use library Faker
 * Doc: https://packagist.org/packages/fzaninotto/faker.
 *
 * @param string $faker
 **/
$faker = Faker\Factory::create();

//example 1;
$showStudentInfo1 = new \Vendor\Render\Student\GetStudent($faker->name);
$showStudentInfo1->getStudentName('');

//example 2;
$showStudentInfo2 = new \Vendor\Render\Student\GetStudentDate($faker->name);
$showStudentInfo2->getStudentName('');
$showStudentInfo2->getStudentDate('');

//example 3;
$showStudentInfo2 = new \Vendor\Render\Student\GetStudentComposition($faker->name);
$showStudentInfo2->renderStudentName();
