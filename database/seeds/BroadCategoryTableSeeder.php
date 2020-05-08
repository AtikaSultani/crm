<?php

use App\Models\BroadCategory;
use Illuminate\Database\Seeder;


class BroadCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BroadCategory::create(['broad_cat_name' => 'Request for information']);
        BroadCategory::create(['broad_cat_name' => 'Request for assistance']);
        BroadCategory::create(['broad_cat_name' => 'Positive feedback']);
        BroadCategory::create(['broad_cat_name' => 'Minor Complain']);
        BroadCategory::create(['broad_cat_name' => 'Major Complain']);
    }
}
