<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('regiones')->insert([
          'region' => 'Tarapacá',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Antofagasta',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Atacama',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Coquimbo',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Valparaíso',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Libertador General Bernardo O\'Higgins',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Maule',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Bío-Bío',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Araucanía',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Los Lagos',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Aysén del General Carlos Ibañez del Campo',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Magallanes y de la Antártica Chilena',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Metropolitana de Santiago',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Los Ríos',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Arica y Parinacota',
      ]);
      DB::table('regiones')->insert([
          'region' => 'Ñuble',
      ]);
    }
}
