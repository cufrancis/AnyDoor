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
          // 顶级分类
          ['name' =>  '爱智慧', 'code' =>  'interest'],
          ['name' =>  '有知识', 'code' =>  'skill'],
          ['name' =>  '乐生活', 'code' =>  'lohas'],
          ['name' =>  '很能打', 'code' =>  'vatality'],
          ['name' =>  '极客范', 'code' =>  'geek'],
          ['name' =>  '文艺腔', 'code' =>  'artistic'],
          ['name' =>  '孤客岛', 'code' =>  'island'],

          // 爱智慧 子分类
          ['name' =>  '数学', 'gid' =>  1],
          ['name' =>  '物理', 'gid' =>  1],
          ['name' =>  '天文', 'gid' =>  1],
          ['name' =>  '生物', 'gid' =>  1],
          ['name' =>  '医学', 'gid' =>  1],
          ['name' =>  '心理学',  'gid' =>  1],
          ['name' =>  '语言学',  'gid' =>  1],
          ['name' =>  '人类学',  'gid' =>  1],
          ['name' =>  '考古学',  'gid' =>  1],

          // 有知识 子分类
          ['name' =>  '编程语言', 'gid' =>  2],
          ['name' =>  '互联网技术',  'gid' =>  2],
          ['name' =>  '移动开发', 'gid' =>  2],
          ['name' =>  '通信技术', 'gid' =>  2],

          // 乐生活 子分类
          ['name' =>  '生活', 'gid' =>  3],
          ['name' =>  '吃货', 'gid' =>  3],
          ['name' =>  '健康', 'gid' =>  3],
          ['name' =>  '美容', 'gid' =>  3],


        ]);
    }
}
