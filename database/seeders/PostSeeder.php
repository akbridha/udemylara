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
        $iterasiKategori = 0 ;
        for($i = 1; $i <=$jumlah_data; $i++)  {
           if($iterasiKategori == 4)
          { $iterasiKategori=1;  }
          else
          {$iterasiKategori = $iterasiKategori +1 ;}



            $randomNumber = mt_rand(100, 260);
          DB::table('posts')->insert([
            'title' => Str::random(20),
            'description' => Str::random(140),
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'category_id' =>  $iterasiKategori,
            'user_id' =>  1,
            'views' => (string)$randomNumber

        ]);}
    }
}
