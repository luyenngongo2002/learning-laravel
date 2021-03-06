<?php

namespace Database\Seeders;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cars')->insert([
        //     'description' =>Str::random(10),
        //     'model' =>Str::random(10),
        //     'products_on' => Carbon::parse('01-01-2018'),
        //     'image'=> Str::random(10),
        //     'mf_id' => Str::random(10)

        // ]);
        Car::factory(20)->count(10)->create();

    }
}
