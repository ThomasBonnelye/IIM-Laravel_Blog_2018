<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class categoriesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {


            DB::table('categories')->insert([

                'titre_categorie' => $faker->text(10)

            ]);

        }

    }
}
