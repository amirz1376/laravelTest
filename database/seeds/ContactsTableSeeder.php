<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();

        $faker = Faker::create();

        $contacts = [];

        foreach (range(1, 25) as $index) {

          $contacts[] = [
            'name' => $faker->name,
            'group_id' => rand(1, 3),
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'adress' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
            'company' => $faker->company,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
          ];

        }

        DB::table('contacts')->insert($contacts);

    }
}
