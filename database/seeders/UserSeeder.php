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
        $users = [
            [
                'name' => 'Saiful',
                'phone' => '812345678901',
                'role_id' => '3'
            ],
            [
                'name' => 'Labib',
                'phone' => '823456789012',
                'role_id' => '3'
            ],
        ];

        User::insert($users);
    }
}
