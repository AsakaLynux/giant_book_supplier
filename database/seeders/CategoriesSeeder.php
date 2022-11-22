<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name' => 'Action'
            ],
            [
                'name' => 'Advanture'
            ],
            [
                'name' => 'Pirates'
            ],
            [
                'name' => 'Sport'
            ],
            [
                'name' => 'Ninja'
            ],
            [
                'name' => 'Fantasy'
            ],
            [
                'name' => 'Romance'
            ],
        ]);
    }
}
