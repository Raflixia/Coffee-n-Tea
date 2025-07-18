<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'CnT',
            'email' => 'CnT@google.com',
            'password' => hash('sha256','root'),
        ]);
        $this->call([
            ProdukTableSeeder::class,
        ]);
    }
}
