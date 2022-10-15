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
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
=======
        $this->call(UserSeeder::class);
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    }
}
