<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // Blog::factory(30)->create();

        // creating a relationship b/n products and categories
        Category::factory(6)->create()->each(function ($category){

            $products = Product::factory(6)->make();
            $category->products()->saveMany($products);
        });
    }
}
