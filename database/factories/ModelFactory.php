<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraphs(3, true)
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'body' => $faker->sentence,
        'user_id' => App\User::inRandomOrder()->first()->id,
        'post_id' => App\Post::inRandomOrder()->first()->id,
    ];
});