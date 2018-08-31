<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Programming_languageTableSeeder ::class);
        $this->call(LanguageTableSeeder ::class);
        $this->call(DeveloperTableSeeder ::class);
    }
}
