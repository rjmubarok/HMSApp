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
            'title'=>'Welcome to Hostel management system',
            'meta_description'=>'Hostel management system .',
            'meta_keywords'=>'E-Hostel , Hostel Hostel , E-Hostel , Hostel.',
            'logo'=>'frontend/assets/images/b-6.png',
            'favicon'=>'frontend/assets/images/b-6.png',
            'address'=>'Mymenshing, Dhata Banladesh',
            'email'=>'mubarokhossen2003@gmail.com',
            'phone'=>'01781991183',
            'side_photo'=>'frontend/assets/images/blog/post1.png',
            'side_title'=>'With my Boss',
            'side_description'=>"is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,",
            'footer'=> ' Deevelope by Rj Mubarok',
        ]);
    }
}
