<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name' => 'Nicollas',
            'last_name' => 'Feitosa',
            'email' => 'admin@nicollas.dev',
            'password' => bcrypt('123mudar')
        ]);

        User::factory(5)->create();
    }
}
