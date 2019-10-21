<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*App\User::create([
            'nombre'   => 'Admin',
            'email'    => 'admin@admin.com',
            // 'rut_user'   => '4555-555',
            // 'ciudad_user'   => 'Santiago',
            // 'telefono_user'   => '4555-555-55',
            // 'direccion_user'   => 'Santiago De chile',
            'password' => bcrypt('admin123456'),
        ]);*/
        $this->call(RegionesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ComunasSeeder::class);
        $this->call(ConfiguracionSeeder::class);

    }
}
