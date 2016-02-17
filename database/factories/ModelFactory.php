<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $email = $faker->email;

    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => str_random(10),
        'avatar'         => '//www.gravatar.com/avatar/'.md5(strtolower(trim($email))),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    $label = substr($faker->sentence(rand(3, 7)), 0, -1);

    return [
        'label'     => $label,
        'description'   => '<p>'.$faker->text(2000).'</p>',
        'image'     => $faker->imageUrl(750, 346, 'cats', false),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $title = substr($faker->sentence(rand(3, 7)), 0, -1);

    return [
        'title'     => $title,
        'slug'      => str_slug($title),
        'excerpt'   => '<p>'.$faker->text(200).'</p>',
        'content'   => '<p>'.$faker->text(2000).'</p>',
        'image'     => $faker->imageUrl(750, 346, 'cats', false),
        'author_id' => 1,
    ];
});

$factory->define(App\Work::class, function (Faker\Generator $faker) {
    $title = substr($faker->sentence(rand(3, 7)), 0, -1);

    return [
        'title'     => $title,
        'slug'      => str_slug($title),
        'excerpt'   => '<p>'.$faker->text(200).'</p>',
        'content'   => '<p>'.$faker->text(2000).'</p>',
        'image'     => $faker->imageUrl(750, 346, 'cats', false),
        'author_id' => 1,
        'link'      => 'https://tyloo.fr',
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    $name = $faker->unique()->word;

    return [
        'name'    => $name,
        'slug'    => str_slug($name),
        'content' => $faker->text(200),
    ];
});
