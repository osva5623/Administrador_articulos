<?php

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
        App\User::create([
            'name' => 'Oswaldo jimenez',
            'email' => 'i@admin.com',
            'password' => bcrypt('Admin123')
        ]);

        factory(App\Post::class ,24)->create();
    }
}
