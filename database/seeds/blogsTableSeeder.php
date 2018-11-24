<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class blogsTableSeeder extends Seeder
{
    private function datealeatoire()
    {

        return Carbon::createFromDate(rand(2010, 2018), rand(1, 12), rand(1, 28));

    }

    public function run()
    {
        DB::table('blogs')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {

            $date = $this->datealeatoire();

            DB::table('blogs')->insert([

                'titre' => $faker->text(50),
                'auteur' => $faker->text(10),
                'texte' => $faker->text(200),
                'created_at' => $date,
                'categorie_id' => $faker->numberBetween(1,10),
                'updated_at' => $date

            ]);

        }

    }
}
