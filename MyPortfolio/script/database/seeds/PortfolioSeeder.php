<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/1.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Creative Web Design</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/2.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Attendence Mangment</a> ',
        	'cat_id'=>2
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/3.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Book Store Wocommerce</a> ',
        	'cat_id'=>3
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/4.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Multi Vendor Ecommerce</a> ',
        	'cat_id'=>4
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/5.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Laravel Multi Authentication</a> ',
        	'cat_id'=>5
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/6.jpg',
        	'title'=>'<a href="#" target="_self" id="link">Creative Html5 Template</a> ',
        	'cat_id'=>6
        ]);
    }
}
