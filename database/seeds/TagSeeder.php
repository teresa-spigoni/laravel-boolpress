<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['nature', 'sport', 'gossip', 'news'];
        foreach($tags as $tag){
            $theTag = new Tag();
            $theTag->name = $tag;
            $theTag->save();
        }
    }
}
