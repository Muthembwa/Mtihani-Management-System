<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "firstName" => $faker->name,
        "secondName" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
    ];
});
