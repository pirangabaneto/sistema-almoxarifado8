<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $this->call([
            FuncionarioSeeder::class,
            SalaSeeder::class,
            ServidorSeeder::class,
            TipoEquipamentoSeeder::class,
            PedidoSeeder::class,
            PatrimonioSeeder::class
        ]);

    }
}
