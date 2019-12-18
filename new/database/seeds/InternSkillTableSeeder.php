<?php

use Illuminate\Database\Seeder;

class InternSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intern_skill')->insert([
            'intern_id'=>'1',
            'skill_id'=>'2',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'1',
            'skill_id'=>'4',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'1',
            'skill_id'=>'6',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'2',
            'skill_id'=>'1',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'2',
            'skill_id'=>'2',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'2',
            'skill_id'=>'3',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'2',
            'skill_id'=>'4',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'2',
            'skill_id'=>'5',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'3',
            'skill_id'=>'1',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'3',
            'skill_id'=>'2',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'2',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'3',
            'skill_id'=>'7',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'1',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'2',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'3',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'4',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'5',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'4',
            'skill_id'=>'6',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'1',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'2',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'4',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'6',
        ]);
        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'5',
        ]);

        DB::table('intern_skill')->insert([
            'intern_id'=>'5',
            'skill_id'=>'7',
        ]);
    }
}
