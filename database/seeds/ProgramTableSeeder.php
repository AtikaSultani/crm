<?php

use Illuminate\Database\Seeder;
use App\Programs;
class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          // DB::table('program')->insert([
          //   'id'=>Integer(20),
          //   'name'=>varchar(255)
          // ]);
          Programs::create(['program_name' => 'Humanitarian Aid']);
          Programs::create(['program_name' => 'Humanitarian Aid2']);
    }
}
