<?php

$factory->define(App\Stream::class, function (Faker\Generator $faker) {
    return [
        "class_name" => $faker->name,
        "class_teacher_id" => factory('App\User')->create(),
    ];
});
