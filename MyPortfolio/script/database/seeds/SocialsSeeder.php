<?php

use Illuminate\Database\Seeder;
use App\Social;
class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
        	'icon'=>'fab fa-facebook',
        	'link'=>'#'
        ]);
        Social::create([
        	'icon'=>'fab fa-linkedin',
        	'link'=>'#'
        ]);
        Social::create([
        	'icon'=>'fab fa-instagram',
        	'link'=>'#'
        ]);
        Social::create([
        	'icon'=>'fab fa-pinterest',
        	'link'=>'#'
        ]);
    }
}
