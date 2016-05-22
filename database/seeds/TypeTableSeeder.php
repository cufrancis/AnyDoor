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
          ['name' =>  '爱智慧', 'code' =>  'interest', 'gid'  =>  0],
          ['name' =>  '有知识', 'code' =>  'skill', 'gid'  =>  0],
          ['name' =>  '乐生活', 'code' =>  'lohas', 'gid'  =>  0],
          ['name' =>  '很能打', 'code' =>  'vatality', 'gid'  =>  0],
          ['name' =>  '极客范', 'code' =>  'geek', 'gid'  =>  0],
          ['name' =>  '文艺腔', 'code' =>  'artistic', 'gid'  =>  0],
          ['name' =>  '孤客岛', 'code' =>  'island', 'gid'  =>  0],

          // 爱智慧 子分类
          ['name' =>  '数学', 'gid' =>  1, 'code' =>  ''],
          ['name' =>  '物理', 'gid' =>  1, 'code' =>  ''],
          ['name' =>  '天文', 'gid' =>  1, 'code' =>  ''],
          ['name' =>  '生物', 'gid' =>  1, 'code' =>  ''],
          ['name' =>  '医学', 'gid' =>  1, 'code' =>  ''],
          ['name' =>  '心理学',  'gid' =>  1, 'code' =>  ''],
          ['name' =>  '语言学',  'gid' =>  1, 'code' =>  ''],
          ['name' =>  '人类学',  'gid' =>  1, 'code' =>  ''],
          ['name' =>  '考古学',  'gid' =>  1, 'code' =>  ''],

          // 有知识 子分类
          ['name' =>  '编程语言', 'gid' =>  2, 'code' =>  ''],
          ['name' =>  '互联网技术',  'gid' =>  2, 'code' =>  ''],
          ['name' =>  '移动开发', 'gid' =>  2, 'code' =>  ''],
          ['name' =>  '通信技术', 'gid' =>  2, 'code' =>  ''],

          // 乐生活 子分类
          ['name' =>  '生活', 'gid' =>  3, 'code' =>  ''],
          ['name' =>  '吃货', 'gid' =>  3, 'code' =>  ''],
          ['name' =>  '健康', 'gid' =>  3, 'code' =>  ''],
          ['name' =>  '美容', 'gid' =>  3, 'code' =>  ''],


        ]);
    }
}
