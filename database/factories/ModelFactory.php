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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
        'type' => 'company',
        'phone' => $faker->e164PhoneNumber
    ];
});

function generateDetails()
{
    $faker = Faker\Factory::create('us_US');
    $details = [
        'name' => $faker->company,
        'user_id' => $faker->numberBetween(1, 12),
        'registration_number' => $faker->randomNumber(2) . '-' . $faker->randomNumber(8),
        'address' => json_encode([
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'postcode' => $faker->postcode,
            'state' => $faker->state
        ]),
        'phone_office' => $faker->e164PhoneNumber,
        'fax_office' => $faker->e164PhoneNumber
    ];
    return $details;
}

$factory->define(App\Models\Users\CompanyDetails::class, function (Faker\Generator $faker) {
    $details = generateDetails();
    return $details;
});

$factory->define(App\Models\Users\GovernmentDetails::class, function (Faker\Generator $faker) {
    $details = generateDetails();
    return $details;
});

$factory->define(App\Models\Users\GLCDetails::class, function (Faker\Generator $faker) {
    $details = generateDetails();
    return $details;
});

$factory->define(App\Models\Users\IndividualDetails::class, function (Faker\Generator $faker) {
    $details = generateDetails();
    return $details;
});


$factory->define(App\Models\Application::class, function (Faker\Generator $faker) {
    $documents = ['pay' => 'static/img/resit.pdf'];
    for ($i = 0; $i < 4; $i++) {
        $documents[$faker->word] = 'static/img/resit.pdf';
    }
    return [
        'user_id' => $faker->numberBetween(3, 10),
        'slug' => 'BYR' . $faker->year . '0' . $faker->numberBetween(10, 99),
        'type' => $faker->randomElement(['highway', 'ad']),
        'category' => $faker->randomElement(['new', 'exiting']),
        'concession' => $faker->company,
        'highway_id' => $faker->numberBetween(1, 26),
        'location' => $faker->randomDigit,
        'direction' => $faker->word,
        'from_city' => $faker->word,
        'to_city' => $faker->word,
        'area' => $faker->state(),
        'documents' => json_encode($documents),
        'zone' => $faker->randomElement(collect(trans('apply.second.fields.zone.items'))->keys()->toArray()),
        'authority' => $faker->randomElement(collect(trans('apply.second.fields.authority.items'))->keys()->toArray()),
        'coordinates' => json_encode(['lat' => $faker->latitude, 'lng' => $faker->longitude]),
        'status' => $faker->randomElement(collect(trans('apply.statuses'))->keys()->toArray()),
    ];
});

$factory->define(App\Models\Payment::class, function (Faker\Generator $faker) {
    return [
        'application_id' => $faker->numberBetween(1, 10),
        'type' => $faker->numberBetween(0, 1),
        'category' => $faker->randomDigit,
        'quantity' => json_encode(['amount' => $faker->randomDigit, 'items' => [0 => 1, 1 => 2, 2 => 3, 3 => 4]]),
        'pay' => $faker->randomElement(['bank', 'check']),
        'check' => $faker->word,
        'sum' => $faker->randomFloat(),
        'payDate' => $faker->date(),
        'bank' => $faker->randomDigit,
        'state' => $faker->randomDigit,
        'structure' => $faker->randomDigit,
        'size' => json_encode(['w' => $faker->numberBetween(10, 100), 'h' => $faker->numberBetween(20, 500)]),
        'status' => $faker->randomElement(['new', 'paid'])
    ];
});

$factory->define(App\Models\Notification::class, function (Faker\Generator $faker) {
    return [
        'department' => $faker->randomElement(['bkpa', 'bpo', 'pw']),
        'application_id' => $faker->numberBetween(1, 10),
        'status' => $faker->randomElement(['approve', 'new', 'viewed'])
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'application_id' => $faker->numberBetween(1, 10),
        'slug' => 'LLM/BT/PI/E' . $faker->numberBetween(1, 10) . '2016' . $faker->randomDigit . '-' . $faker->randomDigit,
        'status' => 'new'
    ];
});

$factory->define(App\Models\Messages\Message::class, function (Faker\Generator $faker) {
    return [
        'application_id' => 1,
        'project_id' => null,
        'message' => $faker->sentence,
        'user_id' => $faker->numberBetween(1, 2),
        'is_seen' => 0
    ];
});