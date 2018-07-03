<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('code_melli');
            $table->string('name_mostaar')->nullable();
            $table->date('tarikh_tavalod');
            $table->string('serial_shenasname');
            $table->string('shomare_chand_raghami');
            $table->string('mahale_tavalod');
            $table->string('ostane_tavalod');
            $table->string('shahrestan_tavalod');
            $table->string('roosta_tavalod')->nullable();
            $table->string('mahale_sodoore_shenasname');
            $table->string('din');
            $table->string('mazhab');
            $table->string('address');
            $table->integer('chandomin_bachehye_khanevade');
            $table->string('email');
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
        Schema::dropIfExists('students');
    }
}
