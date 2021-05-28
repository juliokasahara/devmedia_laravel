<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Telefone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /*   \App\Models\User::factory(10)->create(); */
       $user = Cliente::factory()->has(Telefone::factory()->count(3), 'posts')->create(); 
    }
}
