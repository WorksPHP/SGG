<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Alimentação'],
                ['name' => 'Saúde'],
                ['name' => 'Transporte'],
                ['name' => 'Viagem'],
                ['name' => 'Moradia'],
                ['name' => 'Comunicação'],
            ]
        );
    }
}
