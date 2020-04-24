<?php

use Illuminate\Database\Seeder;
use App\Specific_category;

class SpecificCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specific_category::create(['specifice_cat_name' => 'Quantity of distributed items or cash']);
        Specific_category::create(['specifice_cat_name' => 'Quality of distributed items']);
        Specific_category::create(['specifice_cat_name' => ' Long waiting time at  distribution point']);
        Specific_category::create(['specifice_cat_name' => 'Lack of information about programme']);
        Specific_category::create(['specifice_cat_name' => 'Issues during targeting process (corruption, favoritism…)']);
        Specific_category::create(['specifice_cat_name' => 'Distrust - between staff and beneficiary']);
        Specific_category::create(['specifice_cat_name' => 'Disrespect & arrogance of Cordaid or partner staff']);
        Specific_category::create(['specifice_cat_name' => 'Inaccessible assistance']);
        Specific_category::create(['specifice_cat_name' => 'Broken promises']);
        Specific_category::create(['specifice_cat_name' => 'Unaddressed grievances']);
        Specific_category::create(['specifice_cat_name' => 'Abuse of power & inappropriate behavior of Cordaid or partner staff']);
        Specific_category::create(['specifice_cat_name' => 'Allegation of financial fraud (by Cordaid or partner staff or others)']);
        Specific_category::create(['specifice_cat_name' => 'Other (please specify)']);


    }
}
