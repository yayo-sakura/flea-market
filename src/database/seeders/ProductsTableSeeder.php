<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'image' => 'storage/images/Armani+Mens+Clock.png',
                'name' => '腕時計',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計' ,
                'condition_id' => '1' ,
            ],
            [
                'image' => 'storage/images/HDD+Hard+Disk.png',
                'name' => 'HDD',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク' ,
                'condition_id' => '2' ,
            ],
            [
                'image' => 'storage/images/iLoveIMG+d.png',
                'name' => '玉ねぎ3束',
                'price' => '300',
                'description' => '新鮮な玉ねぎ3束のセット' ,
                'condition_id' => '3' ,
            ],
            [
                'image' => 'storage/images/Leather+Shoes+Product+Photo.png',
                'name' => '革靴',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴' ,
                'condition_id' => '4' ,
            ],
            [
                'image' => 'storage/images/Living+Room+Laptop.png',
                'name' => 'ノートPC',
                'price' => '45000',
                'description' => '高性能なノートパソコン' ,
                'condition_id' => '1' ,
            ],
            [
                'image' => 'storage/images/Music+Mic+4632231.png',
                'name' => 'マイク',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク' ,
                'condition_id' => '2' ,
            ],
            [
                'image' => 'storage/images/Purse+fashion+pocket.png',
                'name' => 'ショルダーバッグ',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ' ,
                'condition_id' => '3' ,
            ],
            [
                'image' => 'storage/images/Tumbler+souvenir.png',
                'name' => 'タンブラー',
                'price' => '500',
                'description' => '使いやすいタンブラー' ,
                'condition_id' => '4' ,
            ],
            [
                'image' => 'storage/images/Waitress+with+Coffee+Grinder.png',
                'name' => 'コーヒーミル',
                'price' => '4000',
                'description' => '手動のコーヒーミル' ,
                'condition_id' => '1' ,
            ],
            [
                'image' => 'storage/images/外出メイクアップセット.png',
                'name' => 'メイクセット',
                'price' => '2500',
                'description' => '便利なメイクアップセット' ,
                'condition_id' => '2' ,
            ],
        ]);
    }
}
