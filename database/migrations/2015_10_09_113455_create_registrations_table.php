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
            $table->string('college_1',255);
            $table->string('branch_1',255);
            $table->string('year_1',255);
            $table->string('state_1',255);
            $table->bigInteger('contact_number_1');

            $table->string('name_2',255)->nullable();
            $table->string('email_2',255)->nullable();
            $table->string('college_2',255)->nullable();
            $table->string('branch_2',255)->nullable();
            $table->string('year_2',255)->nullable();
            $table->string('state_2',255)->nullable();
            $table->bigInteger('contact_number_2')->nullable();
            
            $table->string('name_3',255)->nullable();
            $table->string('email_3',255)->nullable();
            $table->string('college_3',255)->nullable();
            $table->string('branch_3',255)->nullable();
            $table->string('year_3',255)->nullable();
            $table->string('state_3',255)->nullable();
            $table->bigInteger('contact_number_3')->nullable();
            
            $table->string('name_4',255)->nullable();
            $table->string('email_4',255)->nullable();
            $table->string('college_4',255)->nullable();
            $table->string('branch_4',255)->nullable();
            $table->string('year_4',255)->nullable();
            $table->string('state_4',255)->nullable();
            $table->bigInteger('contact_number_4')->nullable();
            
            $table->string('file_name',255)->nullable();
            $table->string('project_name',255);
            $table->enum('project_category',['c','nc'])->default('c');
            
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
        Schema::drop('registrations');
    }
}
