<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Infinite;
use App\Models\Dojo;

class InfiniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    // Make sure you have dojo records already
    $dojos = Dojo::all();

    if ($dojos->isEmpty()) {
        $this->command->warn('No dojo records found. Run DojoSeeder first.');
        return;
    }

    Infinite::factory()->count(50)->make()->each(function ($infinite) use ($dojos) {
        $infinite->dojo_id = $dojos->random()->id;
        $infinite->save();
    });
    }
}
