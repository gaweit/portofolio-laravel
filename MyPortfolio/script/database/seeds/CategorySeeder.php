<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=>'SEO'
        ]);
        Category::create([
        	'name'=>'Webdesign'
        ]);
        Category::create([
        	'name'=>'Work'
        ]);
        Category::create([
        	'name'=>'Wordpress'
        ]);
    }
}
