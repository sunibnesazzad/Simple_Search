<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Language;
use App\Programming_language;
use App\Developer;



class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {

            $developer = Developer::create(['email' => $faker->email]);
            $developer->save();

            $programming = array();
            $language = array();
            $num1 = $faker->numberBetween($min = 1, $max = 4);
            $num =  $faker->numberBetween($min = 1, $max = 7);
            for ($i = 1; $i <= $num1; $i++){
                $programming[] =  $num++;
            }

            $num2 = $faker->numberBetween($min = 1, $max = 3);
            $lan =  $faker->numberBetween($min = 1, $max = 3);
            for ($i = 1; $i <= $num2; $i++){
                $language[] = $lan++;
            }

            $developer->language()->attach($language);
            $developer->programming_language()->attach($programming);

        }
    }
}
