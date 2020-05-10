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
        BroadCategory::create(['category_name' => 'Request for information']);
        BroadCategory::create(['category_name' => 'Request for assistance']);
        BroadCategory::create(['category_name' => 'Positive feedback']);
        BroadCategory::create(['category_name' => 'Minor Complain']);
        BroadCategory::create(['category_name' => 'Major Complain']);
    }
}
