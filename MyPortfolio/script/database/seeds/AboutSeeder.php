<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
        	'description'=>'My name is Jone Doe, I am web developer from Dhaka, Bangladesh. I have rich experience in web site design and building and customization, also I am good at Laravel.',
        	'cv'=>'#',
        	'image'=>'frontend/img/about/1.jpg'
        ]);
    }
}
