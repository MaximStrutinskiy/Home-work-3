<?php

require_once __DIR__.'/vendor/autoload.php';

/**
 * Use library Faker
 * Doc: https://packagist.org/packages/fzaninotto/faker.
 *
 * @param string $faker
 **/
$faker = Faker\Factory::create();

$ex1 = new Vendor\Render\Simple\GetSimpleText($faker->name);
$ex1_res = $ex1->renderResult();
$ex1->showResult($ex1_res);

$ex1 = new Vendor\Render\Uppercase\GetUppercaseText($faker->name);
$ex1_res = $ex1->renderResult();
$ex1->showResult($ex1_res);
