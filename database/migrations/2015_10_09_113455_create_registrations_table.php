<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_1',255);
            $table->string('email_1',255);
            $table->bigInteger('contact_number_1');
            $table->string('college_1',255);
            $table->string('name_2',255);
            $table->string('email_2',255);
            $table->bigInteger('contact_number_2');
            $table->string('college_2',255);
            $table->string('name_3',255);
            $table->string('email_3',255);
            $table->bigInteger('contact_number_3');
            $table->string('college_3',255);
            $table->string('name_4',255);
            $table->string('email_4',255);
            $table->bigInteger('contact_number_4');
            $table->string('college_4',255);
            $table->string('abstract',5000);
            $table->string('file_name',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('registrations');
    }
}
