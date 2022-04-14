<?php

use Illuminate\Database\Seeder;
use App\Exeperince;
class ExpericeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exeperince::create([
        	'title'=>'Art Designer',
        	'date'=>'2014 / 2015',
        	'icon'=>'fab fa-dribbble',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);

         Exeperince::create([
        	'title'=>'Web Developer',
        	'date'=>'2016 / 2017',
        	'icon'=>'fab fa-twitter',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);

          Exeperince::create([
        	'title'=>'Graphic Designer',
        	'date'=>'2010 / 2019',
        	'icon'=>'fab fa-google',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);

           Exeperince::create([
        	'title'=>'Php Programming',
        	'date'=>'2004 / 2008',
        	'icon'=>'fab fa-twitter',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);

            Exeperince::create([
        	'title'=>'UI/UX Design',
        	'date'=>'2014 / 2015',
        	'icon'=>'fab fa-twitter',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);

             Exeperince::create([
        	'title'=>'Web Designer',
        	'date'=>'2018 / 2020',
        	'icon'=>'fab fa-twitter',
        	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        ]);
    }
}
