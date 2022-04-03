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
        User::create([
            'name' => 'Yadira',
            'email' => 'Yadira@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Raul',
            'email' => 'Raul@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Espana',
            'email' => 'Espana@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'JuanMa',
            'email' => 'JuanMa@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Jonathan',
            'email' => 'Jonathan@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
