<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++){

            $author = new Author();
            $author->name = $faker->firstName();
            $author->surname = $faker->lastName();
            $author->email = $faker->email();
            $author->save();    

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text();
            $authorDetail->avatar = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqmLEM7M9WzpqFLYb7GhrP76gpZ4gFK1mdvJL2MGMDJBhxTD8tEB9fLoHaMN87fxYQbJs&usqp=CAU';
            $authorDetail->website = $faker->url();

            $author->detail()->save($authorDetail);

        }


    }
}
