<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('posts')->insert([

            ['user_name' => 'テスト', 'contents' => 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。'],
            ['user_name' => 'ダミー', 'contents' => 'ダミーテキスト']
        ]);
    }
}
