<?php

use Illuminate\Database\Seeder;
use App\Skill;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
        	'name'=>'Html',
        	'percent'=>'95'
        ]);
        Skill::create([
        	'name'=>'Css',
        	'percent'=>'90'
        ]);
        Skill::create([
        	'name'=>'Js',
        	'percent'=>'60'
        ]);
        Skill::create([
        	'name'=>'PHP',
        	'percent'=>'80'
        ]);
    }
}
