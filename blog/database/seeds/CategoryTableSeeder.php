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
       		['name' => 'Bóng đá'],
       		['name' => 'Tin tức quốc tế'],
       		['name' => 'Hi-tech'],
       		['name' => 'Showbiz'],
       		['name' => 'Sống trẻ'],
       		['name' => 'Thể thao'],
       		['name' => 'Sức khoẻ'],
       		['name' => 'Video'],
       		['name' => 'Phái đẹp'],
       		['name' => 'Game']
       	];

       	DB::table('categories')->insert($cates);
    }
}
