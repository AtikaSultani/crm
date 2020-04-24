<?php

use Illuminate\Database\Seeder;
use App\Broad_category;


class BroadCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Broad_category::create(['broad_cat_name' => 'Request for imformation']);
        Broad_category::create(['broad_cat_name' => 'Request for assistance']);
        Broad_category::create(['broad_cat_name' => 'Positive feedback']);
        Broad_category::create(['broad_cat_name' => 'Minor Complain']);
        Broad_category::create(['broad_cat_name' => 'Major Complain']);
    }
}
