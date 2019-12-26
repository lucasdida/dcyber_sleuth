<?php

use Illuminate\Database\Seeder;

class DigimonLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('digimon_level')->insert(['name_level' => 'Baby']);
        DB::table('digimon_level')->insert(['name_level' => 'In Training']);
        DB::table('digimon_level')->insert(['name_level' => 'Rockie']);
        DB::table('digimon_level')->insert(['name_level' => 'Champion']);
        DB::table('digimon_level')->insert(['name_level' => 'Ultimate']);
        DB::table('digimon_level')->insert(['name_level' => 'Mega']);
        DB::table('digimon_level')->insert(['name_level' => 'Ultra']);
        DB::table('digimon_level')->insert(['name_level' => 'Armor']);
        DB::table('digimon_level')->insert(['name_level' => 'No Level']);
    }
}
