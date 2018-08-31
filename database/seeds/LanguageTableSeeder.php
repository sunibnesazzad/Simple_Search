<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['code' => 'en']);
        Language::create(['code' => 'bd']);
        Language::create(['code' => 'ch']);
        Language::create(['code' => 'ja']);
        Language::create(['code' => 'vn']);
        Language::create(['code' => 'ar']);
    }
}
