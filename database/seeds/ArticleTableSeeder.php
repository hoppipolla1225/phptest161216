<?php


use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncateで一旦データを消す
        DB::table('articles')->truncate();
        //テストデータを挿入
        DB::table('articles')->insert([
          [
            'title' => 'article01',
            'description' => 'test01',
            'body' => 'test01',
            'user_id' => 1,
            'status' => 1,
            'created_at' => '2016-10-07 10:00:00',
            'updated_at' => '2016-10-07 10:00:00',
          ],
          [
            'title' => 'article02',
            'description' => 'test02',
            'body' => 'test02',
            'user_id' => 2,
            'status' => 1,
            'created_at' => '2016-10-07 10:30:00',
            'updated_at' => '2016-10-07 10:30:00',
          ],
        ]);
    }
}
