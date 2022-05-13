<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->String('pat_passport_no')->unique();
            $table->String('pat_name')->nullable();
            $table->String('pat_nationality')->nullable();
            $table->String('pat_gender')->nullable();;
            $table->DateTime('pat_date_of_birth')->nullable();
            $table->String('pat_job')->nullable();
            $table->String('pat_payer')->nullable();

            
            
            $table->timestamps();
            
        }); 
        DB::statement("ALTER TABLE patients ADD pat_image LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
