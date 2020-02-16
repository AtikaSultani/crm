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
          $table->unsignedbigInteger('province_id');
          $table->unsignedbigInteger('district_id');
          $table->string('village');
          $table->unsignedbigInteger('broad_category_id');
          $table->unsignedbigInteger('specific_category_id');
          $table->date('received_date');
          $table->string('quarter');
          $table->string('statuse');
          $table->unsignedbigInteger('referred_to');
          $table->unsignedbigInteger('user_id');
          $table->string('name_who_shared_action');
          $table->date('close_date');
          $table->string('description');

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

          $table->foreign('referred_to')
            ->references('id')
            ->on('referred_programs');

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
