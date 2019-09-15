<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    $user_ids = [1, 2, 3];
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'user_id' => $faker->randomElement($user_ids),
        'content' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
