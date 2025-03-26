<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // 清空資料表
       DB::table('todos')->truncate();

        // 建立繁體中文 Faker 實例
        $faker = FakerFactory::create('zh_TW');

        // 直接插入 10 筆繁體中文資料
        for ($i = 0; $i < 500; $i++) {
            DB::table('todos')->insert([
                'body' => $faker->realText(rand(20, 50)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 輸出確認訊息
        $this->command->info('成功建立 ' . DB::table('todos')->count() . ' 筆繁體中文資料');
    }
}
