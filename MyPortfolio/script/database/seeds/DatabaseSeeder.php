<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(SctiptsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(SocialsSeeder::class);
        $this->call(TaglineSeeder::class);
        $this->call(TestimonialsSeeder::class);
        $this->call(SeoTableSeeder::class);
        $this->call(ExpericeTableSeeder::class);
        $this->call(LangTableSeeder::class);
        $this->call(MenuTableSeeder::class);
    }
}
