<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'titre2' => 'Facts',
            'description2'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            
            'nombre1'=> 232,
            'descriptiona'=> 'Happy Clients consequuntur quae',

            'nombre2'=> 521,
            'descriptionb'=> 'Projects adipisci atque cum quia aut',

            'nombre3'=> 1.463,
            'descriptionc'=> 'Hours Of Support aut commodi quaerat',

            'nombre4'=> 15,
            'descriptiond'=> 'Hard Workers rerum asperiores dolor',
        ]);
    }
}
