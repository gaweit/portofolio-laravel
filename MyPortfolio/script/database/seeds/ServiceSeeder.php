<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
        	'icon'=>'frontend/img/service/4.png',
        	'title'=>'Google Analytics',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
        Service::create([
        	'icon'=>'frontend/img/service/5.png',
        	'title'=>'Digital Marketing',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
        Service::create([
        	'icon'=>'frontend/img/service/6.png',
        	'title'=>'Content Managment',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
        Service::create([
        	'icon'=>'frontend/img/service/1.png',
        	'title'=>'Web Development',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
        Service::create([
        	'icon'=>'frontend/img/service/2.png',
        	'title'=>'Api integration',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
        Service::create([
        	'icon'=>'frontend/img/service/3.png',
        	'title'=>'Srarch Engine',
        	'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
        ]);
       
    }
}
