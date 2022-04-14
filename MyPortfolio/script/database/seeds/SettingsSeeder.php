<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::Create([
        	'logo'=>'uploads/logo.png',
            'favicon'=>'uploads/favicon.ico',
            'site_name'=>'mortfolio',
            'ui'=>'1',
        	'home_img'=>'uploads/home_bg.jpg',
        	
        	
        	'service_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum exercitationem necessitatibus nobis maiores.',
        	'portfolio_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum exercitationem necessitatibus nobis maiores.',
        	
        	'subscribe_description'=>'',
        	'contact_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        	'hire_link'=>'#',
        	
        ]);
    }
}
