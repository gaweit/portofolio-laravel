<?php

use Illuminate\Database\Seeder;
use App\Tagline;
class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tagline::create([
        	'tag_line'=>'Grapics Designer'
        ]);
        Tagline::create([
        	'tag_line'=>'Web Developer'
        ]);
        Tagline::create([
        	'tag_line'=>'Laravel Developer'
        ]);
        Tagline::create([
        	'tag_line'=>'UI/UX Designer'
        ]);
        Tagline::create([
        	'tag_line'=>'Frontend Developer'
        ]);
    }
}
