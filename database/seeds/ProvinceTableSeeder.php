<?php

use Illuminate\Database\Seeder;
use App\provinces;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinces::create(['province_name' => 'Orozgan']);
        Provinces::create(['province_name' => 'Badqis']);
        Provinces::create(['province_name' => 'Bamyan']);
        Provinces::create(['province_name' => 'Badakhshan']);
        Provinces::create(['province_name' => 'Baqlan']);
        Provinces::create(['province_name' => 'Balkh']);
        Provinces::create(['province_name' => 'Parwan']);
        Provinces::create(['province_name' => 'Paktia']);
        Provinces::create(['province_name' => 'Paktika']);
        Provinces::create(['province_name' => 'Pnjshir']);
        Provinces::create(['province_name' => 'Takhar']);
        Provinces::create(['province_name' => 'Jawzjan']);
        Provinces::create(['province_name' => 'Khost']);
        Provinces::create(['province_name' => 'Daikondy']);
        Provinces::create(['province_name' => 'Zabol']);
        Provinces::create(['province_name' => 'SarePole']);
        Provinces::create(['province_name' => 'Samangan']);
        Provinces::create(['province_name' => 'ghazni']);
        Provinces::create(['province_name' => 'ghore']);
        Provinces::create(['province_name' => 'Faryab']);
        Provinces::create(['province_name' => 'Farah']);
        Provinces::create(['province_name' => 'Kandahar']);
        Provinces::create(['province_name' => 'Kabul']);
        Provinces::create(['province_name' => 'Kapisa']);
        Provinces::create(['province_name' => 'Kunduz']);
        Provinces::create(['province_name' => 'Kunar']);
        Provinces::create(['province_name' => 'Laghman']);
        Provinces::create(['province_name' => 'Logar']);
        Provinces::create(['province_name' => 'Nangarhar']);
        Provinces::create(['province_name' => 'Norestan']);
        Provinces::create(['province_name' => 'Nimruz']);
        Provinces::create(['province_name' => 'Wardak']);
        Provinces::create(['province_name' => 'Herat']);
        Provinces::create(['province_name' => 'Helmand']);
    }
}
