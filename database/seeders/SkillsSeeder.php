<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'titre3' => 'Skills',
            'description3'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            
            'log1' => 'HTML',
            'loga' => 100,

            'log2' => 'CSS',
            'logb' => 90,

            'log3' => 'JAVASCRIPT',
            'logc' => 75,

            'log4' => 'PHP',
            'logd' => 80,

            'log5' => 'WORDPRESS/CMS',
            'loge' => 90,

            'log6' => 'PHOTOSHOP',
            'logf' => 55,



        ]);
    }
}
