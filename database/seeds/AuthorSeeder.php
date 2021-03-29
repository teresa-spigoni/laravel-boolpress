<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Comment;
use App\Post;

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
            $authorDetail->avatar = 'https://jptowingandrecovery.com/wp-content/uploads/2020/01/avatar-square-circle.png';
            $authorDetail->website = $faker->url();

            for($t = 0; $t < rand(1, 4); $t++){

                $post = new Post();
                $post->pic = 'https://picsum.photos/seed/' . rand(1,1000) . '/200/200';
                $post->title = $faker->text(20);
                $post->content = $faker->text(1200);
                $author->posts()->save($post);

                for($x = 0; $x < rand(1, 7); $x++){

                    $comment = new Comment();
                    $comment->comment_title = $faker->text(20);
                    $comment->comment_content = $faker->text(1200);
                    $post->comments()->save($comment);

                }

            }

            $author->detail()->save($authorDetail);

        }


    }
}
