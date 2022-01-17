<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
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
            'name' => 'oppo',
            'price' => '65k',
            'category' => 'mobile',
            'gallery' => 'https://images.unsplash.com/photo-1609388450487-8feb2e4c9811?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
            'description' => 'a samrt phone have 4gb ram and extra featurs',
        ],

        [
            'name' => 'nokia',
            'price' => '65k',
            'category' => 'mobile',
            'gallery' => 'https://images.unsplash.com/photo-1568706407142-cafe0c91e5a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=741&q=80',
            'description' => 'a samrt phone have 4gb ram and extra featurs',
        ],

        [
            'name' => 'realme',
            'price' => '65k',
            'category' => 'mobile',
            'gallery' => 'https://images.unsplash.com/photo-1631871633283-31be5e55a29a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'description' => 'a samrt phone have 4gb ram and extra featurs',
        ],
        [
            'name' => 'oneplus',
            'price' => '65k',
            'category' => 'mobile',
            'gallery' => 'https://images.unsplash.com/photo-1614796740292-50ae67262ff0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=439&q=80',
            'description' => 'a samrt phone have 4gb ram and extra featurs',
        ],
            
        ]);
    }
}
