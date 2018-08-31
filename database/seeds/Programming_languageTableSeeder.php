<?php

use Illuminate\Database\Seeder;
use App\Programming_language;

class Programming_languageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programming_language::create(['name' => 'Java']);
        Programming_language::create(['name' => 'PHP']);
        Programming_language::create(['name' => 'Android']);
        Programming_language::create(['name' => 'Python']);
        Programming_language::create(['name' => 'Ruby']);
        Programming_language::create(['name' => 'Rails']);
        Programming_language::create(['name' => 'C++']);
        Programming_language::create(['name' => 'C#']);
        Programming_language::create(['name' => 'Objective-C']);
        Programming_language::create(['name' => 'MATLAB']);
        Programming_language::create(['name' => 'HTML']);
    }
}
