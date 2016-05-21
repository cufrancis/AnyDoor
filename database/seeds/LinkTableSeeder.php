<?php

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('links')->insert([
          ['name' =>  '百度', 'url' =>  'http://www.baidu.com', 'type'  =>  1,  'recommend' =>  1],
          ['name' =>  'cufrancis的博客', 'url' =>  'http://cufrancis.com', 'type'  =>  2, 'recommend'  =>  1],
        ]);
    }
}
