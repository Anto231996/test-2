<?php

use App\Airport;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $codes = ['BDPOI100','HGWET144','QZWUI343','ECUGY401','QJJMK013','ZJXLY431','GGTNC402','REJDH222','PKQKP342','NWHSS140','LARAR302','ZYLDV212','AXOCF000','DACDI440'];

        for ($i=0; $i < count($codes) ; $i++) { 
            $newAirport = new Airport();
            $newAirport->name = $faker->country();
            $newAirport->code = $faker->unique()->randomElement($codes);
            $newAirport->lat = $faker->latitude($min = -90, $max = 90);
            $newAirport->lng = $faker->longitude($min = -180, $max = 180); 
            $newAirport->save();
        }
    }
}
