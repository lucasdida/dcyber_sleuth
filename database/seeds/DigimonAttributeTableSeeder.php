<?php

use Illuminate\Database\Seeder;

class DigimonAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Fire']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Water']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Plant']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Eletric']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Earth']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Wind']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Light']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Dark']);
        DB::table('digimon_attribute')->insert(['name_attribute' => 'Neutral']);
    }
}
