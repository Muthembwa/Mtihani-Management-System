<?php

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        "adm_no" => $faker->randomNumber(2),
        "student_name" => $faker->name,
        "parents_name" => $faker->name,
        "parents_email" => $faker->safeEmail,
        "parents_phone_no" => $faker->randomNumber(2),
        "class_name_id" => factory('App\Stream')->create(),
    ];
});
