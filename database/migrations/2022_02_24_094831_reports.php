<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
           
            $table->id();
            //$table->bigInteger('rep_id')->unsigned();
            
            $table->String('rep_passport_no');
            
            
            $table->DateTime('rep_registration_date')->nullable();;
            $table->DateTime('rep_result_date')->nullable();;
            $table->String('rep_acc_no')->nullable();;
            
            $table->String('rep_sample_type')->nullable();;
            $table->String('rep_result')->nullable();;
            $table->String('rep_result_ar')->nullable();;
            $table->String('rep_verified_by')->nullable();;
            $table->String('rep_lab_director')->nullable();;
            $table->String('rep_reviewed_by')->nullable();;
            $table->timestamps();

            $table->bigInteger('rep_passport_no')->unsigned()->change();
            $table->foreign('rep_passport_no')->references('pat_passport_no')->on('patients');
        });
        DB::statement("ALTER TABLE reports ADD rep_image LONGBLOB");
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports'); 
    }
}
