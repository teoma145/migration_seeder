<?php

namespace Database\Seeders;
use App\Models\House;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i < 10;$i++){
            $newHouse = new House();
            $newHouse->image=$faker->imageUrl(640, 480, 'animals', true);
            $newHouse->reference=$faker->bothify('??-###');
            $newHouse->adress=$faker->streetAddress();
            $newHouse->postal_code=$faker->bothify('??-###');;
            $newHouse->city=$faker->city();
            $newHouse->state=$faker->state();
            $newHouse->square_meters=$faker->numberBetween(30,1000);
            $newHouse->rooms=$faker->numberBetween(2,20);
            $newHouse->type=$faker->randomElement(['monolocale','bilocale','villa']);
            $newHouse->description=$faker->paragraphs(5,true);
            $newHouse->price=$faker->randomFloat(2,2000,500000);

        }
    }
}
