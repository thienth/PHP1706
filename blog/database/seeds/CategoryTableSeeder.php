<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$cates = [
       		['name' => 'Bóng đá', 'slug' => 'bong-da'],
       		['name' => 'Tin tức quốc tế', 'slug' => 'tin-tuc-quoc-te'],
       		['name' => 'Hi-tech', 'slug' => 'hi-tech'],
       		['name' => 'Showbiz', 'slug' => 'showbiz'],
       		['name' => 'Sống trẻ', 'slug' => 'song-tre'],
       		['name' => 'Thể thao', 'slug' => 'the-thao'],
       		['name' => 'Sức khoẻ', 'slug' => 'suc-khoe'],
       		['name' => 'Video', 'slug' => 'video'],
       		['name' => 'Phái đẹp', 'slug' => 'phai-dep'],
       		['name' => 'Game', 'slug' => 'game']
       	];

       	DB::table('categories')->insert($cates);
    }
}
