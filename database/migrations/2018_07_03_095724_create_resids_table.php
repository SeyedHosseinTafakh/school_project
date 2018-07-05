<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resids', function (Blueprint $table) {
            $table->increments('id');
//            $table->string('name_payer');
            $table->integer('amount')->nullable();
            $table->string('zarin_pal_RefId')->nullable();
            $table->string('zarin_pal_Message')->nullable();
            $table->integer('student_id');
//            $table->integer('nobate_pardakht');
            $table->string('tozihat');
            $table->date('tarikh_pardakht')->nullable();
            $table->string('ravesh_pardakht')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('resids');
    }
}
