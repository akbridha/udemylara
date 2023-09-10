<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jumlah_data = 10;
        for($i = 1; $i <=$jumlah_data; $i++)  {
            $randomNumber = mt_rand(100, 260);
          DB::table('posts')->insert([
            'title' => Str::random(20),
            'description' => Str::random(140),
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'category_id' =>  1,
            'user_id' =>  1,
            'views' => (string)$randomNumber

        ]);}
    }
}
