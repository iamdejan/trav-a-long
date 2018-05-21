<?php

use Illuminate\Database\Seeder;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Advice::class, 20)->create();
    }
}
