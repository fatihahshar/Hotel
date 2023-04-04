<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'roomname' => 'kokobop',
            'roomdescription' => 'qwiquei wquyruqyw uieyqwuey',
            'roomquantity' => 9,
            'price' =>1235.67

        ]);
    }
}
