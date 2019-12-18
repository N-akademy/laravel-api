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
       $this->call([
        InternTableSeeder::class,
        SkillTableSeeder::class,
        InternSkillTableSeeder::class,
       ]);
    }
}
