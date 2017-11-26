<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 1000; $i++) { 
        	$title = $faker->realText(100, 1);
        	$slug = str_slug($title.'-'.microtime(), '-');
        	$post = [
        		'title' => $title,
        		'content' => $faker->realText(500, 3),
        		'short_desc' => $faker->realText(200, 1),
        		'created_by' => -1,
        		'author' => $faker->name(),
        		'slug' => $slug,
        		'cate_id' => rand(1, 10)
        	];
        	DB::table('posts')->insert($post);
        }
    }
}
