<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
        	'phone'=>'01830617500',
        	'email'=>'example@email.com',
        	'address'=>'202, Grasselli Street , Conway.'
        ]);
    }
}
