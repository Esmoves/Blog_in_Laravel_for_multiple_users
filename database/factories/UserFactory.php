<?php

use Faker\Generator as Faker;


$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'firstname' => $faker->firstname,
	    'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password
       // 'remember_token' => str_random(10)
    ];
});

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'titel' => $faker->sentence,
        'excerp' => $faker->paragraph(1),
        'body' => $faker->text,
        'image' => $faker->word,
        'author_id' => function() {
            return factory(App\Author::class)->create()->id;
        },
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
