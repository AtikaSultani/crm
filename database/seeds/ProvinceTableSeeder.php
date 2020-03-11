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
        Provinces::create(['name' => 'Orozgan']);
        Provinces::create(['name' => 'Badqis']);
        Provinces::create(['name' => 'Bamyan']);
        Provinces::create(['name' => 'Badakhshan']);
        Provinces::create(['name' => 'Baqlan']);
        Provinces::create(['name' => 'Balkh']);
        Provinces::create(['name' => 'Parwan']);
        Provinces::create(['name' => 'Paktia']);
        Provinces::create(['name' => 'Paktika']);
        Provinces::create(['name' => 'Pnjshir']);
        Provinces::create(['name' => 'Takhar']);
        Provinces::create(['name' => 'Jawzjan']);
        Provinces::create(['name' => 'Khost']);
        Provinces::create(['name' => 'Daikondy']);
        Provinces::create(['name' => 'Zabol']);
        Provinces::create(['name' => 'SarePole']);
        Provinces::create(['name' => 'Samangan']);
        Provinces::create(['name' => 'ghazni']);
        Provinces::create(['name' => 'ghore']);
        Provinces::create(['name' => 'Faryab']);
        Provinces::create(['name' => 'Farah']);
        Provinces::create(['name' => 'Kandahar']);
        Provinces::create(['name' => 'Kabul']);
        Provinces::create(['name' => 'Kapisa']);
        Provinces::create(['name' => 'Kunduz']);
        Provinces::create(['name' => 'Kunar']);
        Provinces::create(['name' => 'Laghman']);
        Provinces::create(['name' => 'Logar']);
        Provinces::create(['name' => 'Nangarhar']);
        Provinces::create(['name' => 'Norestan']);
        Provinces::create(['name' => 'Nimruz']);
        Provinces::create(['name' => 'Wardak']);
        Provinces::create(['name' => 'Herat']);
        Provinces::create(['name' => 'Helmand']);
    }
}
