<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string("project_name");
          $table->string("NGO_name");
          $table->date("start_date");
          $table->date("end_date");
          $table->string("donors");
          $table->string("activities");
          $table->string("direct_beneficiaries")->nullable();
          $table->string("indirect_beneficiaries")->nullable();
          $table->string("on_budject_project")->nullable();
          $table->string("off_budject_project")->nullable();
          $table->string("budjet")->nullable();
          $table->unsignedBigInteger('province_id');
          $table->unsignedBigInteger('district_id');
          $table->string('project_manager');


          $table->foreign('province_id')
            ->references('id')
            ->on('provinces');

          $table->foreign('district_id')
            ->references('id')
            ->on('districts');



          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
