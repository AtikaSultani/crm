<?php

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(['province_name' => 'Orozgan']);
        Province::create(['province_name' => 'Badqis']);
        Province::create(['province_name' => 'Bamyan']);
        Province::create(['province_name' => 'Badakhshan']);
        Province::create(['province_name' => 'Baqlan']);
        Province::create(['province_name' => 'Balkh']);
        Province::create(['province_name' => 'Parwan']);
        Province::create(['province_name' => 'Paktia']);
        Province::create(['province_name' => 'Paktika']);
        Province::create(['province_name' => 'Pnjshir']);
        Province::create(['province_name' => 'Takhar']);
        Province::create(['province_name' => 'Jawzjan']);
        Province::create(['province_name' => 'Khost']);
        Province::create(['province_name' => 'Daikondy']);
        Province::create(['province_name' => 'Zabol']);
        Province::create(['province_name' => 'SarePole']);
        Province::create(['province_name' => 'Samangan']);
        Province::create(['province_name' => 'ghazni']);
        Province::create(['province_name' => 'ghore']);
        Province::create(['province_name' => 'Faryab']);
        Province::create(['province_name' => 'Farah']);
        Province::create(['province_name' => 'Kandahar']);
        Province::create(['province_name' => 'Kabul']);
        Province::create(['province_name' => 'Kapisa']);
        Province::create(['province_name' => 'Kunduz']);
        Province::create(['province_name' => 'Kunar']);
        Province::create(['province_name' => 'Laghman']);
        Province::create(['province_name' => 'Logar']);
        Province::create(['province_name' => 'Nangarhar']);
        Province::create(['province_name' => 'Norestan']);
        Province::create(['province_name' => 'Nimruz']);
        Province::create(['province_name' => 'Wardak']);
        Province::create(['province_name' => 'Herat']);
        Province::create(['province_name' => 'Helmand']);
    }
}
