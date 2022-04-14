<?php

use Illuminate\Database\Seeder;
use App\Testimonial;
class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
        	'name'=>'Jhone Doe',
        	'avatar'=>'frontend/img/profile/2.jpg',
        	'position'=>'Xtream SoftTech',
        	'review'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
        ]);
        Testimonial::create([
        	'name'=>'Jane Doe',
        	'avatar'=>'frontend/img/profile/1.jpg',
        	'position'=>'LionCoders',
        	'review'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
        ]);
        Testimonial::create([
        	'name'=>'Mic Jhone',
        	'avatar'=>'frontend/img/profile/3.jpg',
        	'position'=>'XeonBD',
        	'review'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
        ]);
    }
}
