<?php

$factory->define(App\Subject::class, function (Faker\Generator $faker) {
    return [
        "subject_code" => $faker->randomNumber(2),
        "subjectname" => $faker->name,
        "subject_teacher_id" => factory('App\User')->create(),
    ];
});
