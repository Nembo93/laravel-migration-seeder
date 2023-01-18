<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <= 7; $i++ ){
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Trenitalia, Italo,']);
            $new_train->start_station = $faker->city();
            $new_train->destination = $faker->city();
            $new_train->trip_date = $faker->date('Y_m_d');
            $new_train->leave_hour = $faker->time('H_i');
            $new_train->arrival_hour = $faker->time('H_i');
            $new_train->train_code = $faker->numerify();
            $new_train->wagon_number = $faker->numberBetween(8, 12);
            $new_train->in_time = $faker->numberBetween(0, 1);
            $new_train->aborted = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
