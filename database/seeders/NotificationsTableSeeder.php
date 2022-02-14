<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        foreach (range(1,30) as $item) {
            DB::table('notifications')->insert([
                'priority' => $faker->numberBetween(49,53),
                'url' => $faker->text(50),
                'description' => $faker->paragraph(rand(5,20)),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } 
    }
}
