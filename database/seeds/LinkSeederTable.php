<?php

use App\Link;
use Illuminate\Database\Seeder;

class LinkSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker\Factory::create();

        $links =  [
            [   'name' => $faker->text,
                'url' => $faker->text,
                'type' => $faker->text
            ],
            [
            'name' => $faker->text,
            'url' => $faker->text,
            'type' => $faker->text
            ]
        ];

        foreach($links as $links => $link) {
           Link::create($link);
        }
    }

}
