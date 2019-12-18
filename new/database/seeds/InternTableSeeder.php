<?php

use Illuminate\Database\Seeder;

class InternTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interns')->insert([

            'firstname'=>'Norhen',
            'lastname'=>'Wachani',
            'age'=>'26',
            'phone_number'=>'06425486',
            'email'=>'n.wachani@itstudents.fr',
        ]);

        DB::table('interns')->insert([

            'firstname'=>'Soline',
            'lastname'=>'Molowa',
            'age'=>'31',
            'phone_number'=>'06425548',
            'email'=>'s.molowa@itstudents.fr',
        ]);

        DB::table('interns')->insert([

            'firstname'=>'Océane',
            'lastname'=>'Belardi',
            'age'=>'32',
            'phone_number'=>'06425784',
            'email'=>'o.belardi@itstudents.fr',
        ]);

        DB::table('interns')->insert([

            'firstname'=>'Quentin',
            'lastname'=>'Dessertine',
            'age'=>'29',
            'phone_number'=>'06424476',
            'email'=>'q.dessertine@itstudents.fr',
        ]);

        DB::table('interns')->insert([

            'firstname'=>'Orkun',
            'lastname'=>'Selcuk',
            'age'=>'35',
            'phone_number'=>'071454482',
            'email'=>'o.selcuk@itstudents.fr',
        ]);




    }
}
