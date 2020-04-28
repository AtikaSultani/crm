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
          $table->unsignedBigInteger('program_id');
          $table->date("start_date");
          $table->date("end_date");
          $table->string("donors");
          $table->string("activities");
          $table->string("direct_beneficiaries");
          $table->string("indirect_beneficiaries");
          $table->string("on_budject_project");
          $table->string("off_budject_project");
          $table->string("budjet");
          $table->unsignedBigInteger('province_id');
          $table->unsignedBigInteger('district_id');

          $table->foreign('province_id')
            ->references('id')
            ->on('provinces');

          $table->foreign('district_id')
            ->references('id')
            ->on('districts');

            $table->foreign('program_id')
              ->references('id')
              ->on('Programs');

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
