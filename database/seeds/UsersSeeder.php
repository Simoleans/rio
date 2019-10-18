<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre'   => 'Admin',
            'email'    => 'admin@admin.com',
            // 'rut_user'   => '4555-555',
            // 'ciudad_user'   => 'Santiago',
            // 'telefono_user'   => '4555-555-55',
            // 'direccion_user'   => 'Santiago De chile',
            'password' => bcrypt('admin123456'),
        ]);
    }
}
