<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbClinic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('name')->not_null();
            $table->string('email')->unique()->not_null();
            $table->string('password')->not_null();
            $table->date('age');
            $table->string('profile_image')->nullable();
            $table->integer('phone_numb')->not_null();
            $table->string('address');
            $table->string('level')->not_null();
            
        });
        Schema::create('majors', function (Blueprint $table){
            $table->increments('major_id',50);
            $table->string('major_name',50)->not_null();
          
            
        });


        Schema::create('shifts', function (Blueprint $table){
            $table->increments('shift_id')->not_null();
            $table->time('begin')->not_null();
            $table->time('end')->not_null();
          
            
        });

        Schema::create('doctors', function (Blueprint $table ){
            $table->increments('doctor_id');
            $table->string('name',50)->not_null();
            $table->string('email',50)->unique()->not_null();
            $table->string('password',50)->not_null();
            $table->string('phone_numb',50)->not_null();
            $table->string('profile_image')->nullable();
            $table->integer('major_id')->unsigned();
            $table->foreign('major_id')->references('major_id')->on('majors');
            
            
            
        });

        Schema::create('patients', function (Blueprint $table){
            $table->increments('patient_id');
            $table->string('name',50)->not_null();
            $table->string('email',50)->unique()->not_null();
            $table->string('password',50)->not_null();
            $table->date('age');
            $table->boolean('gender');
            $table->string('profile_image')->nullable();
            $table->string('address',50);
            $table->string('phone_numb',11)->not_null();
            

        });

        

         Schema::create('patient_records', function (Blueprint $table){
            $table->increments('record_id')->unsigned();
            $table->date('date');
            $table->integer('doctor_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('shift_id')->unsigned();
            $table->text('result');
            $table->primary('record_id');
            $table->foreign('patient_id')->references('patient_id')->on('patients');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');
            $table->foreign('doctor_id')->references('doctor_id')->on('doctors');

        });
         Schema::create('new_categories', function (Blueprint $table)
        {
            $table->increments('new_category_id');
            $table->string('new_category_name',50)->not_null();
        });

         Schema::create('news', function (Blueprint $table){
            $table->increments('new_id');
            $table->string('subject',100);
            $table->text('content');
            $table->date('date');
            $table->integer('admin_id')->unsigned();
            $table->integer('new_category_id')->unsigned();
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('new_category_id')->references('new_category_id')->on('new_categories');
           
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
