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
            $table->string('name_payer');
            $table->integer('amount');
            $table->string('zarin_pal_RefId');
            $table->string('zarin_pal_Message');
            $table->integer('student_id');
            $table->integer('nobate_pardakht');
            $table->string('fish_ya_check');
            $table->string('bank');
            $table->string('code_shobe')->nullable();
            $table->date('tarikh_pardakht');
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
