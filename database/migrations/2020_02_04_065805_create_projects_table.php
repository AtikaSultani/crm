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
            $table->string("project_code");
            $table->string("partner_name");
            $table->date("start_date");
            $table->date("end_date");
            $table->string("donors");
            $table->string("activities");
            $table->string("direct_beneficiaries")->nullable();
            $table->string("indirect_beneficiaries")->nullable();
            $table->string("total_budget")->nullable();
            $table->string('project_manager');
            $table->unsignedBigInteger('program_id');

            $table->foreign('program_id')
                ->references('id')
                ->on('programs');

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
