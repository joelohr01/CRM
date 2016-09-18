<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 25;

        for($i = 0; $i < $limit; $i++) {
            DB::table('clients')->insert([
                'clientname' => $faker->unique()->name,
                'phone'     => $faker->phoneNumber,
                'email'     => $faker->unique()->email,
                'address'   => $faker->streetAddress,
                'city'      => $faker->city,
                'state'     => $faker->state,
                'zipcode'   => $faker->postcode,
            ]);
        }
    }
}
