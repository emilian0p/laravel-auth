<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPost = new Post();
            $newPost->user = $faker->userName();
            $newPost->date = $faker->dateTime();         
            $newPost->content = $faker->paragraphs(2, true);           
            $newPost->post_image_url = $faker->imageUrl();
            $newPost->title = $faker->words(4, true);
            $newPost->save();
        }
    }
    {
        
    }
}
