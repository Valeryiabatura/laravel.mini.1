<?php

namespace Database\Seeders;

use App\Models\Phonebook2;
use Illuminate\Database\Seeder;

class Phonebook2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phonebook2::factory()->count(100)->create();
    }
}
