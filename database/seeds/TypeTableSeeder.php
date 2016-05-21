<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
          ['name' =>  '计算机', 'code' =>  'computer'],
          ['name' =>  '数学', 'code'  =>  'math'],
        ]);
    }
}
