<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caller_name');
            $table->string('tel_no_received');
            $table->string('gender');
            $table->date('received_date');
            $table->string('status');
            $table->string('quarter');
            $table->string('referred_to');
            $table->string('beneficiary_file')->nullable();
            $table->unsignedBigInteger('broad_category_id');
            $table->unsignedBigInteger('specific_category_id');
            $table->string('received_by');
            $table->string('person_who_shared_action')->nullable();
            $table->date('close_date');
            $table->string('description');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->string('village')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();

            $table->foreign('program_id')
                ->references('id')
                ->on('programs');

            $table->foreign('project_id')
                ->references('id')
                ->on('projects');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');

            $table->foreign('district_id')
                ->references('id')
                ->on('districts');

            $table->foreign('broad_category_id')
                ->references('id')
                ->on('broad_categories');

            $table->foreign('specific_category_id')
                ->references('id')
                ->on('specific_categories');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');


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
        Schema::dropIfExists('complaints');
    }
}
