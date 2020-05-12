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
        SpecificCategory::create(['category_name' => 'Quantity of distributed items or cash']);
        SpecificCategory::create(['category_name' => 'Quality of distributed items']);
        SpecificCategory::create(['category_name' => ' Long waiting time at  distribution point']);
        SpecificCategory::create(['category_name' => 'Lack of information about programme']);
        SpecificCategory::create(['category_name' => 'Issues during targeting process (corruption, favoritism…)']);
        SpecificCategory::create(['category_name' => 'Distrust - between staff and beneficiary']);
        SpecificCategory::create(['category_name' => 'Disrespect & arrogance of Cordaid or partner staff']);
        SpecificCategory::create(['category_name' => 'Inaccessible assistance']);
        SpecificCategory::create(['category_name' => 'Broken promises']);
        SpecificCategory::create(['category_name' => 'Unaddressed grievances']);
        SpecificCategory::create(['category_name' => 'Abuse of power & inappropriate behavior of Cordaid or partner staff']);
        SpecificCategory::create(['category_name' => 'Allegation of financial fraud (by Cordaid or partner staff or others)']);
<<<<<<< HEAD
        SpecificCategory::create(['category_name' => 'Has cordaid beneficiary card but receive no assistance']);
=======
>>>>>>> a4655ce04dfe04127b25592db92b661ff9d59432
        SpecificCategory::create(['category_name' => 'Other (please specify)']);
    }
}
