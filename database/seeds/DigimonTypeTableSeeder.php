<?php

use Illuminate\Database\Seeder;

class DigimonTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('digimon_type')->insert(['name_type' => 'VA']);
        DB::table('digimon_type')->insert(['name_type' => 'VI']);
        DB::table('digimon_type')->insert(['name_type' => 'DA']);
        DB::table('digimon_type')->insert(['name_type' => 'FREE']);
    }
}
