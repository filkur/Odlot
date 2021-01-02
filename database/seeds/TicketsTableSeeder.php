<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tickets')->insert([
            'arrival' => 'Warszawa (WAW)',
            'departure' => 'Lublin (LUZ)',
            'startDate' => date('2021-02-01-20-00'),
            'startHour' => '19:00',
            'flightClass' => 'Standard',
            'airline' => 'Linia lotnicza',
            'price' => '570'
        ]);
    }
}
