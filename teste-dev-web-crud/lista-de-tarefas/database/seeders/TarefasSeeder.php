<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefas;

class TarefasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarefas::factory()->count(50)->create();
    }
}
