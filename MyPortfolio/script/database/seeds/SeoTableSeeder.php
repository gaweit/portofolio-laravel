<?php

use Illuminate\Database\Seeder;
use App\Seo;
class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seo::create([
        	'meta_title'=>'Vportfolio',
        	'author'=>'',
            'meta_tags'=>'',
            'meta_description'=>'',
        ]);
    }
}
