<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Province::class, 10)->create()->each(function ($p) {
        	$p->cities()->saveMany(factory(App\City::class, 5)->make([
                "provinceID" => $p->provinceID
            ]));
        });
    }
}
