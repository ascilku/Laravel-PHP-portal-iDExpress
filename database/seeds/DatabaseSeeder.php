<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            
            // Papua_Seeder::class,
            ITSeeder::class,
            // Seeder_AkunIT::class,
            // UserSeeder::class
        ]);


        
    }
}
