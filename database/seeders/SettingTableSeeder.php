<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title'=>'Welcome to Bigshop ecommerce template.',
            'meta_description'=>'Emart Online Shopping .',
            'meta_keywords'=>'E-mart , Online shopping , E-commerce , Shopsite.',
            'logo'=>'frontend/img/core-img/logo.png',
            'favicon'=>'',
            'address'=>'Mymenshing',
            'email'=>'mubarokhossen2003@gmail.com',
            'phone'=>'01781991183',
            'side_photo'=>'frontend/img/core-img/logo.png',
            'side_title'=>'With my Boss',
            'side_description'=>'he is good person',
            'footer'=> ' Deevelope by Copy Right @Rj Mubarok',
        ]);
    }
}
