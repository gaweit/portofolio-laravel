<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Menu::create([
    		'target'=>'#home',
    		'name'=>'Home',
    		
    	]);

    	Menu::create([
    		'target'=>'#about',
    		'name'=>'About',
    		
    	]);
    	Menu::create([
    		'target'=>'#service',
    		'name'=>'Service',
    		
    	]);
    	Menu::create([
    		'target'=>'#portfolio',
    		'name'=>'Portfolio',
    		
    	]);
    	Menu::create([
    		'target'=>'#contact',
    		'name'=>'Contact',
    		
    	]);
    	


    }
}
