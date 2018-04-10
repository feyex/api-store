
<?php

use App\Tweet;
use Illuminate\Database\Seeder;

class TwitterSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker\Factory::create();

        $tweets =  [
            [   'title' => $faker->word,
                'message' => $faker->text
            ],

            [   'title' => $faker->word,
                'message' => $faker->text
            ]
        ];

        foreach($tweets as $tweets => $tweet) {
            Tweet::create($tweet);
        }
    }
}
