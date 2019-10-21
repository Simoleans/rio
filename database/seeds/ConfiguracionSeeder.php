<?php

use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('configuracion')->insert([
          'user_id' => 1,
          'email_sistema' => 'dramirez@veanx.cl',
          'rut' => '25543320-2',
          'razonsocial' => 'veanx',
          'sag' => 'dewfwe2',
          'direccion' => 'ohiggins',
          'telefono' => '999999999',
          'email_empresa' => 'dramirez@veanx.cl',
          'rlegal' => 'darwin',
          'rutrlegal' => '25543320-2',
          'tlfrlegal' => '999999999',
      ]);
    }
}
