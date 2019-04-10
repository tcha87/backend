<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Category::create(['name' => 'Bags', 'slug' => 'bags']);
      Category::create(['name' => 'Women Shoes', 'slug' => 'women-shoes']);
      Category::create(['name' => 'Man Shoes', 'slug' => 'man-shoes']);
      Category::create(['name' => 'Man Suits', 'slug' => 'man-suits']);
      Category::create(['name' => 'Women Suits', 'slug' => 'women-suits']);
      Category::create(['name' => 'Tops', 'slug' => 'tops']);
      Category::create(['name' => 'Jewellery', 'slug' => 'jewellery']);
      Category::create(['name' => 'Man Jackets', 'slug' => 'man-jackets']);
      Category::create(['name' => 'Women Jackets', 'slug' => 'women-jackets']);


    }
}
