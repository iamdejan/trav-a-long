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
        try {
            $this->call(ProvinceSeeder::class);
        } catch (Exception $e) {
            echo $e->getMessage(). "\n";
        }

        try {
            $this->call(TransportSeeder::class);
        } catch (Exception $e) {
            echo $e->getMessage(). "\n";
        }

        try {
            $this->call(ActivitySeeder::class);
        } catch (Exception $e) {
            echo $e->getMessage(). "\n";
        }
        
        try {
            $this->call(AdviceSeeder::class);
        } catch (Exception $e) {
            echo $e->getMessage(). "\n";
        }
    }
}
