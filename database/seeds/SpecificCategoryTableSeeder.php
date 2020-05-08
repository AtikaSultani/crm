<?php


use App\Models\SpecificCategory;
use Illuminate\Database\Seeder;

class SpecificCategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecificCategory::create(['specifice_cat_name' => 'Quantity of distributed items or cash']);
        SpecificCategory::create(['specifice_cat_name' => 'Quality of distributed items']);
        SpecificCategory::create(['specifice_cat_name' => ' Long waiting time at  distribution point']);
        SpecificCategory::create(['specifice_cat_name' => 'Lack of information about programme']);
        SpecificCategory::create(['specifice_cat_name' => 'Issues during targeting process (corruption, favoritism…)']);
        SpecificCategory::create(['specifice_cat_name' => 'Distrust - between staff and beneficiary']);
        SpecificCategory::create(['specifice_cat_name' => 'Disrespect & arrogance of Cordaid or partner staff']);
        SpecificCategory::create(['specifice_cat_name' => 'Inaccessible assistance']);
        SpecificCategory::create(['specifice_cat_name' => 'Broken promises']);
        SpecificCategory::create(['specifice_cat_name' => 'Unaddressed grievances']);
        SpecificCategory::create(['specifice_cat_name' => 'Abuse of power & inappropriate behavior of Cordaid or partner staff']);
        SpecificCategory::create(['specifice_cat_name' => 'Allegation of financial fraud (by Cordaid or partner staff or others)']);
        SpecificCategory::create(['specifice_cat_name' => 'Other (please specify)']);
    }
}
